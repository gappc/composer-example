# composer-example
Simple example to test composer and dependencies. Inspired by the article [Creating your first Composer/Packagist package](http://blog.jgrossi.com/2013/creating-your-first-composer-packagist-package/).

# Install
The recommended way to install is through
[Composer](http://getcomposer.org). Since this implementation is on purpose not available at [https://packagist.org/](Packagist), you need to refer to the GIT repository when you include it:

```
{
  "require": {
    "gappc/composer-example": "dev-master"
  },
  "repositories": [{
    "type": "vcs",
    "url":  "git@github.com:gappc/composer-example.git"
  }]
}
```
