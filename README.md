<h1>
Traits In PHP
</h1>

<p>
According to the PHP documentation, <strong>Traits</strong> are a mechanism for code reuse in single inheritance languages such as PHP. Purposely,Traits are introduced in PHP language to resolve the limitation of single inheritance and to give a flavor of multiple inheritance. Unlike other OOP languages, PHP does not support the concept of multiple inheritance. To be precise, in PHP a child class can not be derived from more than one parent classes. Consequently, Traits are the strategy for playing an important role in PHP to get rid of the situation. Basically, a Trait can be defined by the use of <strong>trait</strong> keyword and it can be inserted within a class by the use of <strong>use</strong> keyword. Nevertheless, Traits can not be instantiated by their own during their life time. Last but not least, Traits can define both properties and methods, but they can not define constants.
</p>

<p>
By the way, I have written a fruitful article on Interfaces, Traits and Abstract Classes, wherein Traits are combined by other PHPs OOP features. The article can be reached by this <a href="https://medium.com/@annuhuss/some-of-the-phps-object-model-features-interfaces-traits-and-abstract-classes-f98c4509592b/"><i>Link</i></a>. Additionally, PHPs documentation on Traits can also be found by this <a href="https://www.php.net/manual/en/language.oop5.traits.php/"><i>Link</i></a>.
</p>
	
<p>
Traits in PHP offer a lot of functionalities like classes, but only some of them I have utilized here to make the examples as simple as purposive. Although I have introduced two examples, but the 2nd one is only a static-version of the 1st, which is a bit shorter one. Nevertheless, both the examples will perform for getting flight-booking tickets. The examples are shown below:
  
<ul>
<li><strong>traits.php</strong></li>
<li><strong>traits_static-version.php</strong></li>
</ul>
</p>

<p>
Basically, the structure of a Trait is very similar to that of a class. In the examples below, we have defined FlightServices and FlightInfo as Traits, which contain both non-abstract and abstract methods. Now, from the audience, somebody may ask the question: what is an abstract method? A method that does not obtain any implementation, more specifically, a method that does not hold a body, is defined as abstract method. Additionally, these abstract methods must be implemented by the extending Traits and classes. As it can be seen by the following examples, wherein both sit() and food() abstract methods have been implemented by the Economic and Business classes.
</p>

<p>
<i>
What is the important point in the examples to mention about Traits is that, FlightServices and FlightInfo Traits contain different methods to execute flight bookings for Economic and Business classes. If FlightServices and FlightInfo were classes instead Traits, either the Economic or the Business class would not be able to extend the both (“classes”) simultaneously, since PHP does not support multiple inheritance, where some other OOP languages do. Surprisingly, PHP does allow a class to hold more than one Trait at once, that somewhat reduces the lack of multiple inheritance.
</i>
</p>

<p>
In the following code, by the support of FlightBooking object, initially we can create an object, either it is Economic or Business, and then we can confirm a flight booking by the execution of confirmFlight() method. Overall, a ticket is made by the aid of ticket() method.
</p>

```php
//......

class FlightBooking
{    
	//.....
	
	protected function ticket($c)
	{
		//..........
	}

	public function confirmFlight($category)
	{	
		$category = new $category;
		$this->ticket($category);
	}    
}

$f = new FlightBooking();
//.......
$f->confirmFlight($class); // where $class is either 'Economic' or 'Business'
```                                                    
<p></p>

<p><i>Stars from the audience would be always appreciated</i></p>

<p></p>

<p><i>
A detail illustration of this topic and some of my other articles on different topics can be reached by 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i></p>
