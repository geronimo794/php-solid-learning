"Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T."

Objects of a superclass can be replaced with objects of its subclasses without breaking the application. This means that the objects of the subclasses should behave in the same way as the objects of the superclass.
Some examples of violations of the Liskov Substitution Principle include: 
1. A subtype throws an exception for a behavior it can't fulfill
2. A subtype provides no implementation for a behavior it can't fulfill
3. The client knows about subtypes

----------

Now, ostrich is definitely a bird, but it obviously can't fly. The class Ostrich is a sub-type of class Bird, but it shouldn't be able to use the fly method which means that we are breaking the Liskov Substitution Principle