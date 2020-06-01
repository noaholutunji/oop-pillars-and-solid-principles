SOLID PRINCIPLES IN PHP

1. Single Responibility Principle -> A class(object) should have one, and only one reason to change. In other words, a class should have only a single responsibility (task). Each class should have its own responsibility.

2. Open-Close Principle -> Entities should be open for extension, but closed for modification. By saying Open for extension, it means it should be simple to change the behavior of a particular entity (class), and for Closed for modification, it means to change the behavior without modifying source code (this is done by extension).  This principle reduces the chances of code rot i.e. editing the same piece of code again and again. It is very helpful in cases when the requirements may keep getting added in the future. To implement Open-Close Princple, we have to separate extensible behaviour behind an interface, and flip the dependencies.

3. Liskov Substitution -> It states that any implementation of an abstraction (interface) should be substitutable in any place that the abstraction is accepted. Basically it takes care that while coding using interfaces in our code, we not only have a contract of input that the interface receives but also the output returned by different Classes implementing that interface; they should be of same type.
Let q(x) be a property provable about objects x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T.
   
  Ways to adhere to the LSP
- Signature must match
- Preconditions can't be greater
- Post conditions at least equal to
- Exception types must match

4. Interface Segregation Principle -> It states that a client must not be forced to implement an interface that it doesn’t use. It will make sure that Classes are sharing only the knowledge that is required and not just bloating themselves, just because we committed to code to interface. High level code isn't as concerned with details while low level code is more concerned with details and specifics

5. Dependency Inversion -> It states that High level modules should never depend on Low level modules, instead the High level module can depend upon an abstraction and the Low level module depends on that same abstraction. This depends on abstraction, not on concretions. Dependency inversion does not equal Dependency injection. All of this is about decoupling our code.
