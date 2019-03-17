

# Keygen.sh  | PHP | Software Development Kit  
Keygen.sh does not have a PHP Software Development Kit (SDK) that works with their API.  So I made one.  I had a client that is using their service as a authentication process.  That being said it was needed and they were lacking so there we are.  =)    
  
## Expectation  
I prepared a half way put together SDK for a client previously.  However I am back to finish the job.  I will reuse any code that I am able to, however the main components "User, Policy, License, Machine etc objects will be re-built.  They were not exactly what I was looking for.    
  
## Goals During Process
These are just a couple of the basic project material needed to get this project really moving in the correct direction.  
  
* PHP Standard Recommendation (PSR)  

- [X] Setup Project  
- [X] Passing code through code climate.
- [X] Monolog to ensure [PSR-3](https://www.php-fig.org/psr/psr-3/) compliant.
- [X] Autoloader Setup [PSR-4](https://www.php-fig.org/psr/psr-4/) compliant
- [X] Guzzle to ensure we are [PSR-7](https://www.php-fig.org/psr/psr-7/) compliant    
  
## Components/Project Sections
- [X] Class Autoloader
- [ ] Settings
- [ ] Logger
- [ ] Http
- [ ] ObjectAbstract
- [ ] APIToken
- [ ] User
- [ ] Policy
- [ ] License
- [ ] Product
- [ ] Machine
- [ ] Key

## Goals After Completion
- [ ] Create Issue and Pull Request Templates  
- [ ] Documentation styled like Slate or using Slate.
- [ ] Install using Composer
- [ ] PHPUnit Testing
- [ ] Fully Extendable