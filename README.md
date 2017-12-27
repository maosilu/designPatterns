# designPatterns
PHP 的设计模式

3种基本的设计模式：
（1）工厂模式：工厂方法或者类生成对象，而不是在代码中直接new
（2）单例模式：使某个类的对象仅允许创建一个
（3）注册模式：主要用来解决全局共享和交换对象

适配器模式：可以将截然不同的函数接口封装成统一的API

策略模式：将一组特定的行为和算法封装成类，以适应某些特定的上下文环境，这种模式就是策略模式。
（1）可以实现分机逻辑的处理
（2）实现Ioc，依赖倒置、控制反转

数据对象映射模式：将对象和数据存储映射起来，对一个对象的操作会映射为对数据存储的操作

观察者模式（Observer）：当一个对象状态发生改变时，依赖它的对象全部会收到通知，并自动更新
场景：一个事件发生后，要执行一连串更新操作，传统的编程方式，就是在事件的代码之后直接加入处理逻辑。当更新的逻辑增多之后，代码会变的难以维护。这种方式是耦合的，侵入式的，增加新的逻辑需要修改事件主体的代码。
观察者模式实现了低耦合，非侵入式的通知与更新机制

原型模式：
（1）与工厂模式作用相似，都是用来创建对象
（2）与工厂模式的实现不同，原型模式实现创建好一个原型对象，然后通过clone原型对象来创建新的对象。这样就免去了类创建时重复的初始化操作。
（3）原型模式适用于大对象的创建。创建一个大对象需要很大的开销，如果每次new就会消耗很大，原型模式仅需内存拷贝即可。

装饰器模式：
（1）可以动态的添加修改类的功能
（2）一个类提供了一项功能，如果要在修改并添加额外的功能，创痛的编程模式，需要写一个子类继承它，并重新实现类的方法
（3）使用装饰器模式，仅需在运行时添加一个装饰器对象即可实现，可以实现最大的灵活性

迭代器模式：
（1）在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素
（2）相对于传统的编程模式，迭代器模式可以隐藏遍历元素的所需的操作

代理模式：
（1）在客户端与实体之间建立一个代理对象（proxy），客户端对实体进行操作全部委派给代理对象，隐藏实体的具体实现细节。
（2）Proxy还可以与业务代码分离，部署到另外的服务器。业务代码中通过RPC来委派任务。






















