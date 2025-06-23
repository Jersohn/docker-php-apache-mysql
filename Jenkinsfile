pipeline{
    agent any
    stages{
        stage("Run docker compose"){
            steps{
               steps {
                echo "======== Démarrage des conteneurs ========="
                sh 'docker compose version'  // Vérification de la version
                sh 'docker compose up -d'   // Nouvelle syntaxe V2
            }
         
        }
    }
   
       
   
}
