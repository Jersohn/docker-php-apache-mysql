pipeline {
    agent any
    
    stages {
        stage("Run docker compose") {
            steps {
                echo "======== Démarrage des conteneurs ========="
                sh 'docker compose up -d'
            }
        }
    }
}
