php composer install
gcloud config set project is-chatbot-gamma-wppq
gcloud projects add-iam-policy-binding is-chatbot-gamma-wppq --member="serviceAccount:chat-bot-app@is-chatbot-gamma-wppq.iam.gserviceaccount.com" --role="roles/owner"
export GOOGLE_APPLICATION_CREDENTIALS="/home/dailywork_project/cloudshell_open/php-docs-samples/dialogflow/is-chatbot-gamma-wppq-57c19328db6e.json"