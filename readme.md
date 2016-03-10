```

.
├── build.php
├── readme.md
├── src
│   └── MyOnlineStore
│       ├── Application
│       │   ├── Entity
│       │   │   └── Task
│       │   │       ├── TaskInterface.php
│       │   │       └── Task.php
│       │   ├── Handler
│       │   │   └── Article
│       │   │       ├── ArticleHandler.php
│       │   │       └── ImageHandler.php
│       │   ├── Service
│       │   │   └── Task
│       │   │       └── TaskRunnerInterface.php
│       │   └── Tests
│       ├── Domain
│       │   ├── Command
│       │   │   ├── AddFormatToImage.php
│       │   │   ├── AddImageToArticle.php
│       │   │   ├── AddProductToCart.php
│       │   │   └── AddProductToOrder.php
│       │   ├── Entity
│       │   │   ├── Article
│       │   │   │   ├── ArticleCollectionInterface.php
│       │   │   │   ├── ArticleImageInterface.php
│       │   │   │   └── ArticleInterface.php
│       │   │   └── Image
│       │   │       ├── ImageFormatInterface.php
│       │   │       └── ImageInterface.php
│       │   ├── Service
│       │   │   ├── Article
│       │   │   │   ├── ArticleConfiguratorInterface.php
│       │   │   │   ├── ArticleConfigurator.php
│       │   │   │   ├── ArticleFactory.php
│       │   │   │   └── ArticleRepository.php
│       │   │   └── Image
│       │   │       ├── ImageFactory.php
│       │   │       └── ImageRepository.php
│       │   ├── Tests
│       │   └── Value
│       │       ├── Address.php
│       │       └── Zipcode.php
│       └── Infrastructure
│           ├── Doctrine
│           │   ├── Collection
│           │   │   ├── AbstractCollection.php
│           │   │   └── ArticleCollection.php
│           │   └── Repository
│           │       └── ArticleRepository.php
│           ├── Gearman
│           │   └── TaskRunner
│           │       ├── BackgroundTaskRunner.php
│           │       └── ForegroundTaskRunner.php
│           ├── InMemory
│           │   └── Repository
│           │       ├── ArticleRepository.php
│           │       └── ImageRepository.php
│           ├── Propel
│           │   ├── Factory
│           │   │   ├── ArticleFactory.php
│           │   │   └── ImageFactory.php
│           │   ├── Model
│           │   │   ├── ArticleImage.php
│           │   │   ├── Article.php
│           │   │   ├── ImageFormat.php
│           │   │   └── Image.php
│           │   └── Repository
│           │       ├── ArticleRepository.php
│           │       └── ImageRepository.php
│           ├── Symfony
│           │   ├── Bundle
│           │   │   ├── AppBundle
│           │   │   │   ├── Command
│           │   │   │   │   └── CLICommandOmKoffieTeZetten.php
│           │   │   │   └── Form
│           │   │   │       └── StreetWidgetType.php
│           │   │   └── FrontendBundle
│           │   │       ├── Controller
│           │   │       │   └── CustomerController.php
│           │   │       ├── Form
│           │   │       │   └── AddressType.php
│           │   │       └── Resources
│           │   │           └── Views
│           │   │               └── base.html.twig
│           │   ├── Kernel
│           │   │   └── BackendKernel.php
│           │   └── Validators
│           │       └── UrlValidator.php
│           └── Tests
└── tree.txt

```
