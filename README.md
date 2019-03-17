

# Keygen.sh  | PHP | Software Development Kit  
Keygen.sh does not have a PHP Software Development Kit (SDK) that works with their API.  So I made one.  I had a client that is using their service as a authentication process.  That being said it was needed and they were lacking so there we are.  =)    
  
## Expectation  
I prepared a half way put together SDK for a client previously.  However I am back to finish the job.  I will reuse any code that I am able to, however the main components "User, Policy, License, Machine etc objects will be re-built.  They were not exactly what I was looking for.    
  
## Goals During Process
These are just a couple of the basic project material needed to get this project really moving in the correct direction.  
  
* PHP Standard Recommendation (PSR)  

 - [X] Setup Project  
 - [X] Passing code through code climate.
 - [ ] Monolog to ensure [PSR-3](https://www.php-fig.org/psr/psr-3/) compliant.
 - [ ] Autoloader Setup [PSR-4](https://www.php-fig.org/psr/psr-4/) compliant
 - [ ] Guzzle to ensure we are [PSR-7](https://www.php-fig.org/psr/psr-7/) compliant  
 - [ ] Create Issue and Pull Request Templates  
 - [ ] Documentation styled like Slate or using Slate.  
  
## Components/Project Sections  
* [ ] Logger
* [ ] Http
* [ ] Settings
* [ ] ObjectAbstract
* [ ] APIToken
* [ ] User
* [ ] Policy
* [ ] License
* [ ] Product
* [ ] Machine
* [ ] Key

## Goals After Completion
* [ ] Install using Composer
* [ ] PHPUnit Testing
* [ ] Fully Extendable