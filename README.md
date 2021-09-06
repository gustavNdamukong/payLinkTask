
# FizzBuzz & Fibonacci solution UI URLs (no login required)
 ```
    http://127.0.0.1:8888/laravel/paylinkTask/public/home
 ```

# PHP-MagicGetterSetters-in-action
    I have used a Trait that has magic functions which can be reused by child classes. This trait is 'Adapter' found in App\Http\Helpers\Adapter.php

    The trait Adapter has the magic properties __set() and __get(). They allow you to set and retrieve the values of properties without having to
    explicitly have a setter or getter method on the calling object. I have designed this trait to have a constructor that will detect the class that
    is calling it, and record that class in its $callingClass property. That way it is not only extendable; but it knows to run its operations
    of getting and setting property values on the right class.

    As can be seen in the example, the __set() magic method accepts a property name and a value. This property is the target property whose value you
    are about to set or modify with the value ($value) in the second argument.
    The first thing it does is to check if the property you are targeting actually exists on the target/calling class. If it does exist; it modifies
    its value, otherwise, it throws an exception saying that field does not exist on the target object.

    The __get() method works similarly. It only accepts one argument; the property whose value you are trying to retrieve.
    Similarly; it checks on the calling object if that property exists. If it does, it returns its value, otherwise, it throws an exception saying
    field does not exist.

    To use it, create an object that will us this Adapter trait and this object will automatically have access to the __set() and __get().
    I have created an example class 'AdapterTest' to use this trait in App\Http\Classes\AdapterTest.php. It's code looks like this:

```
   <?php

   namespace App\Http\Classes;


   use App\Http\Helpers\Adapter;



   class AdapterTest
   {
       use Adapter;

       public $name = 'James';

       public $contact = '0123456789';

   }
```


    This class uses the Adapter trait. It has two properties name and contact. Trying to assign or retrieve the values of these fields will work
    just fine, but any attempt to assign or access a value of another property that does not exist on itself will result in an exception being thrown.


# WHY I USE A TRAIT

    For the design I chose a trait because, while a simple class would have worked just as well, a trait, being what is is; a good way to extend the
    functionality of a class in PHP will ensure that individual classes in your project only use the trait when they require that functionality of
     restricting what fields anc be set or accessed on them. All other classes that do not need it will simply not use the trait.

    An interface would not be ideal in this case because interfaces supply a contract for your application design. An interface declares
    methods but does not define these methods itself. It is the duty of the implementing objects to define the content of the methods it specifies
    for them. This is great because it allows a group of objects having a common class and methods to implement these methods differently. This
    getter-setter feature is not suitable for such a design, since the functionality needs to be defined and should work identically for all the
    objects subscribing to it.

    This is why I chose to use a trait for this MagicGetterSetter application.