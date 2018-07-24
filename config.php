<?php
define("TOKEN", $_ENV['DEPLOY_TOKEN']);                  // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", $_ENV['REMOTE_REPOSITORY']); // The SSH URL to your repository
define("DIR", '/var/repo/');                       // The path to your repostiroy; this must begin with a forward slash (/)
define("BRANCH", $_ENV['REPO_BRANCH']);                  // The branch route
define("LOGFILE", $_ENV['LOGFILE']);                     // The name of the file you want to log to.
define("GIT", $_ENV['GIT_PATH']);                        // The path to the git executable
define("AFTER_PULL", $_ENV['AFTER_PULL_COMMAND']);       // A command to execute after successfully pulling
