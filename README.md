<h1>
Traits In PHP
</h1>

<p>
<em>PHP</em><i> does not support multiple inheritances. Consequently, Traits are a mechanism to reduce some limitations of single inheritance in PHP and provide a flavor of multiple inheritance. A details about Trait and its functionalities can be found by the <a href="https://www.php.net/manual/en/language.oop5.traits.php"><i>Link</i></a>. 
</p>

<p>
Traits contain different kinds of characteristics and functionalities like classes and a few of them are applied here to make the example as simple as effective. The code I have constructed by the use of Traits is not a replica for somebody’s flight-booking, rather it is a printout of a flight-booking. Additionally, a static-version of the example which is a bit shorter of the first one is also attached and both of them are given below:
</p>
<p>
<ul>
<li><strong>traits.php</strong></li>
<li><strong>traits_static-version.php</strong></li>
</ul>
</p>

<p><em>
What is the important point in this example to mention about Traits is that, FlightServices and FlightInfo Traits contain different methods offering different services and operations to execute a flight booking for either Economic or Business class. If FlightServices and FlightInfo were classes instead Traits, either the Economic or the Business class would not be able to extend the both at the same time, since PHP does not support multiple inheritance like other languages. Interestingly, PHP allows a class to include more than one Trait which somewhat reduce the lack of multiple inheritances.
</em></p>
  
<p><i>
A detail illustration of the example and some of my other related Object-Oriented-Programming articles can be found in 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i></p>
