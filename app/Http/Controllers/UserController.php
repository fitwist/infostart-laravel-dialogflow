<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

$projectId = "is-chatbot-gamma-wppq";
$texts = "reserve a meeting room, there will be 5 of us";
$sessionId = "f87fc5de-032a-4bc8-9d01-a9d91e1f68fe-48f56f2f";

class UserController extends Controller
{
    public function index(){

        $users = User::latest()->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    public function create() {
        return view('users.create');
    }

    public function store() {
        $user = new User();

        $user->name = request('name');
        $user->email = request('email');

        $user->save();

        return redirect('/')->with('mssg', 'User created');
    }

    public function detect_intent_texts($projectId, $texts, $sessionId, $languageCode = 'en-US') {
        // new session
        $sessionsClient = new SessionsClient();
        $session = $sessionsClient->sessionName($projectId, $sessionId ?: uniqid());
        printf('Session path: %s' . PHP_EOL, $session);

        // query for each string in array
        foreach ($texts as $text) {
            // create text input
            $textInput = new TextInput();
            $textInput->setText($text);
            $textInput->setLanguageCode($languageCode);

            // create query input
            $queryInput = new QueryInput();
            $queryInput->setText($textInput);

            // get response and relevant info
            $response = $sessionsClient->detectIntent($session, $queryInput);
            $queryResult = $response->getQueryResult();
            $queryText = $queryResult->getQueryText();
            $intent = $queryResult->getIntent();
            $displayName = $intent->getDisplayName();
            $confidence = $queryResult->getIntentDetectionConfidence();
            $fulfilmentText = $queryResult->getFulfillmentText();

            // output relevant info
            print(str_repeat("=", 20) . PHP_EOL);
            printf('Query text: %s' . PHP_EOL, $queryText);
            printf('Detected intent: %s (confidence: %f)' . PHP_EOL, $displayName,
                $confidence);
            print(PHP_EOL);
            printf('Fulfilment text: %s' . PHP_EOL, $fulfilmentText);

            return ("Намерение определено");
        }

        $sessionsClient->close();
    }
}