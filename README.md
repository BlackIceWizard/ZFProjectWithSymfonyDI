# ZFProjectWithSymfonyDI 
                                    
Testing whether it's possible to use DI from Symfony together with DI from Zend Framework in a project written in Zend Framework.

The logic is simple: I included zendframework/zend-servicemanager (it's quite small) in the project sources (by repository with type "path" through composer.json) and rewrote ```\Zend\ServiceManager\ServiceManager::get``` so that when it doesn't find a service in the ZF service container, it starts searching in the SF container.

The SF container, in turn, is itself a service for the ZF container.
                                                   

The result can be seen in the console controller ```\RiverRing\DiPoc\SimpleModule\Controller\ProofOfConceptController::indexAction```

This action is started with the command:

```bash
docker-compose exec php php public/index.php proof-of-concept
```

result:
```
>> docker-compose exec php php public/index.php proof-of-concept
string(24) "Hello! I'm Zend Service!"
string(27) "Hello! I'm Symfony Service!"
```