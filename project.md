# Genectic Algorithms

---
## Keywords

### Candidate

The phonotype (candidate/creature) is one unique individual of the population that has attributes and is elegible for fitness evaluation.

### Attributes

Characteristics of the cadidate.
- Integer
- Float
- Direction
- Percentage
- Boolean
- List (string)
- List (number)

### Population

Is a group of candidates of one specific generation.

### Initial population

Randomly generated individuals, the first generation.

### Generation

An interation of the evolutive process, where all individuals are childs of other individuals of the same group.

### Genetic representation

A set of properties and/or characteristics of the individual, it's genetics translated to numbers and code, used to assert it's fitness.

### Fitness evaluation

A test is a procedure made to distinguish candidates in a population, scores goes from 0 to 1000.
- USER: Use can set a weight for each of the proprieties for the evaluation.

- Higher
- Lower
- Function (PHP)
- List of functions

### The selected

A group of candidates with the best fitness factor, chosen to breed the next generation.
- USER: can choose how many of the population will be selected, max 50%.

### Breeding

The process of mixing candidates attributes to create another candidate.
- Create types of breeding.
-- Function - given the same attribute, the function will merge them and return the result.
-- Numeric (Bigger, smaller, average, summ, subtraction, bigger module, smaller module, bit add)
-- String (Bigger, smaller, mixed, bit add)

### Mutation

Random changes on the cadidates attributes, very rare.
- USER: can choose the frequency of mutations, default 1%, max 10%.

Mutation types
- Integer ()
- String ()
- Bool (random, invert)
- Function

---
## On the screen

### Main

- Generation index.
- Remaining time estimate.
- Action buttons (Restart, Init generation, Pause).
- 3 best of last generation with attributes view and score.
- 3 worst of the last generation with attributes view and score.
- Current generation Top 3 (from tested).

### Sidebar (Links)

- Configuration page
-
