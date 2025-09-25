<?php
include 'header.php';

// 1. =================================================================
//    RECIPE DATA ARRAY
//    All 20 recipes are now in this structured array.
// ===================================================================
$recipes = [
    [
        'id' => 1,
        'name' => 'Masala Oats',
        'image' => 'rec/Rec1.jpg',
        'benefit' => 'Weight-loss',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 153, 'Protein' => 11.3, 'Carbohydrates' => 27, 'Fat' => 20, 'Fiber' => 3, 'Sugar' => 6.3, 'Sodium' => 270],
        'ingredients' => ['1 cup rolled oats', '1 small onion, chopped', '1 small tomato, chopped', '1/2 cup mixed vegetables (peas, carrots, beans)', '1 green chili, slit', '1/2 tsp turmeric powder', '1/2 tsp cumin seeds', 'Salt to taste', '2 cups water', '1 tbsp oil', 'Fresh coriander for garnish'],
        'instructions' => ['Heat oil in a pan, add cumin seeds.', 'Add chopped onion and green chili, sauté until translucent.', 'Add tomato and cook until soft.', 'Add mixed vegetables, turmeric powder, and salt. Cook for 2-3 minutes.', 'Add oats and roast for a minute.', 'Pour in water, bring to a boil, then simmer until oats are cooked and the mixture thickens.', 'Garnish with fresh coriander and serve hot.']
    ],
    [
        'id' => 2,
        'name' => 'Chickpea Salad',
        'image' => 'rec/Rec2.jpg',
        'benefit' => 'Weight-loss',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 167, 'Protein' => 8.1, 'Fat' => 15, 'Carbohydrates' => 28.5, 'Fiber' => 13.4, 'Sugar' => 7.87, 'Calcium' => 80.36],
        'ingredients' => ['1 can chickpeas, rinsed and drained', '1 cucumber, diced', '1 red bell pepper, diced', '1/4 red onion, finely chopped', '1/4 cup fresh parsley, chopped', '2 tbsp olive oil', '1 tbsp lemon juice', 'Salt and pepper to taste'],
        'instructions' => ['In a large bowl, combine chickpeas, cucumber, red bell pepper, red onion, and parsley.', 'In a small bowl, whisk together olive oil, lemon juice, salt, and pepper.', 'Pour the dressing over the salad and toss to combine.', 'Let it sit for at least 10 minutes for the flavors to meld before serving.']
    ],
    [
        'id' => 3,
        'name' => 'Goddess Bowls',
        'image' => 'rec/Rec19.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['2 cups quinoa, cooked', '1 cup chickpeas, cooked', '1 cup cherry tomatoes, halved', '1 cucumber, diced', '1 avocado, sliced', '1/2 cup red onion, finely chopped', '1/4 cup Kalamata olives, sliced', '1/4 cup feta cheese, crumbled', '1/4 cup fresh parsley, chopped', '1/4 cup tahini dressing', 'Salt and pepper to taste'],
        'instructions' => ['Cook quinoa according to package instructions.', 'In a large bowl, combine cooked quinoa, chickpeas, cherry tomatoes, cucumber, avocado, red onion, olives, and feta cheese.', 'Drizzle the tahini dressing over the bowl.', 'Gently toss the ingredients to combine.', 'Season with salt and pepper to taste.', 'Sprinkle fresh parsley on top.', 'Serve and enjoy your delicious Goddess Bowl!']
    ],
    [
        'id' => 4,
        'name' => 'Sprouts Salad',
        'image' => 'rec/Rec4.jpg',
        'benefit' => 'Weight-loss',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 154, 'Protein' => 9.2, 'Fat' => 0.9, 'Carbohydrates' => 30, 'Fiber' => 11, 'Sugar' => 6.1, 'Sodium' => 446],
        'ingredients' => ['2 cups mixed sprouts', '1 small onion, finely chopped', '1 small tomato, finely chopped', '1/2 cucumber, chopped', '1 green chili, finely chopped', '1/4 cup chopped coriander', '1 tbsp lemon juice', '1/2 tsp chaat masala', 'Salt to taste'],
        'instructions' => ['In a large bowl, combine the mixed sprouts, onion, tomato, cucumber, green chili, and coriander.', 'Sprinkle chaat masala and salt over the mixture.', 'Drizzle with lemon juice.', 'Toss everything well to combine.', 'Serve immediately for the best crunch and freshness.']
    ],
    [
        'id' => 5,
        'name' => 'Chicken Tikka Kebab',
        'image' => 'rec/Rec5.jpg',
        'benefit' => 'Weight-loss',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 33, 'Fat' => 12, 'Carbohydrates' => 11, 'Cholestrol' => 82, 'Sugar' => 5.5, 'Sodium' => 268],
        'ingredients' => ['1 lb boneless, skinless chicken breast, cut into 1-inch cubes', '1 cup plain yogurt', '1 tbsp ginger-garlic paste', '1 tsp turmeric powder', '1 tsp garam masala', '1 tsp red chili powder', '1 tbsp lemon juice', 'Salt to taste', 'Bell peppers and onions, cut into chunks', 'Skewers'],
        'instructions' => ['In a bowl, mix yogurt, ginger-garlic paste, turmeric, garam masala, chili powder, lemon juice, and salt.', 'Add the chicken cubes and marinate for at least 1 hour.', 'Thread the chicken, bell peppers, and onions onto skewers.', 'Grill or bake at 400°F (200°C) for 15-20 minutes, or until chicken is cooked through.', 'Serve hot with mint chutney.']
    ],
    [
        'id' => 6,
        'name' => 'Chicken Curry',
        'image' => 'rec/Rec6.jpg',
        'benefit' => 'Weight-loss',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 243, 'Protein' => 25, 'Fat' => 11, 'Carbohydrates' => 7.5, 'Fiber' => 1.5, 'Sugar' => 2, 'Sodium' => 73, 'Cholestrol' => 74],
        'ingredients' => ['1 lb boneless chicken, cut into pieces', '2 medium onions, finely chopped', '2 tomatoes, pureed', '1 tbsp ginger-garlic paste', '1/2 cup yogurt', '1 tsp turmeric powder', '1 tsp red chili powder', '1 tsp coriander powder', '1/2 tsp garam masala', '2 tbsp oil', 'Salt to taste'],
        'instructions' => ['Heat oil in a pan, add chopped onions and sauté until golden brown.', 'Add ginger-garlic paste and cook for a minute.', 'Add tomato puree, turmeric, chili powder, and coriander powder. Cook until oil separates.', 'Add the chicken pieces and sear on all sides.', 'Whisk yogurt and add it to the pan. Stir well.', 'Add 1 cup of water, salt, and garam masala. Cover and cook for 15-20 minutes until chicken is tender.', 'Garnish with coriander and serve.']
    ],
    [
        'id' => 7,
        'name' => 'Daal Makhni',
        'image' => 'rec/Rec7.jpg',
        'benefit' => 'Muscle-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 cup whole black lentils (urad dal)', '1/4 cup kidney beans (rajma)', '1 large onion, finely chopped', '2 tomatoes, pureed', '1 tbsp ginger-garlic paste', '1 tsp red chili powder', '1/4 cup cream', '2 tbsp butter', 'Salt to taste'],
        'instructions' => ['Soak lentils and kidney beans overnight. Pressure cook until soft.', 'Heat butter in a pan, sauté onions until golden.', 'Add ginger-garlic paste and tomato puree. Cook until oil separates.', 'Add red chili powder and salt.', 'Add the cooked lentils and beans. Simmer for 20-30 minutes.', 'Stir in cream and let it cook for another 2 minutes.', 'Serve hot with naan or rice.']
    ],
    [
        'id' => 8,
        'name' => 'Rajma Chawal',
        'image' => 'rec/Rec8.jpg',
        'benefit' => 'Muscle-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 cup kidney beans (rajma), soaked overnight', '2 onions, chopped', '2 tomatoes, pureed', '1 tbsp ginger-garlic paste', '1 tsp cumin powder', '1 tsp coriander powder', '1/2 tsp turmeric powder', '1/2 tsp garam masala', '2 tbsp oil', 'Salt to taste', 'Cooked rice for serving'],
        'instructions' => ['Pressure cook the soaked kidney beans until tender.', 'Heat oil in a pan, sauté onions until golden brown.', 'Add ginger-garlic paste and cook.', 'Add tomato puree and all the powdered spices except garam masala. Cook until the masala thickens.', 'Add the boiled kidney beans along with their water. Add salt.', 'Simmer for 15-20 minutes. Add garam masala.', 'Serve hot with steamed rice (chawal).']
    ],
    [
        'id' => 9,
        'name' => 'Paneer Tikka',
        'image' => 'rec/Rec9.jpg',
        'benefit' => 'Muscle-gain',
        'category' => 'Veg', // Corrected from Non-Veg
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['250g paneer, cubed', '1 cup thick yogurt', '1 tbsp ginger-garlic paste', '1 tsp carom seeds (ajwain)', '1 tsp chaat masala', '1/2 tsp turmeric powder', '1 tsp red chili powder', '1 tbsp gram flour (besan), roasted', 'Bell peppers and onions, cubed'],
        'instructions' => ['In a bowl, mix yogurt with all spices, ginger-garlic paste, and roasted gram flour.', 'Add paneer, bell peppers, and onions. Coat well and marinate for at least 30 minutes.', 'Arrange on skewers.', 'Grill or bake in a preheated oven at 400°F (200°C) for 15 minutes, turning once.', 'Serve hot with lemon wedges.']
    ],
    [
        'id' => 10,
        'name' => 'Grilled Chicken Breast',
        'image' => 'rec/Rec10.jpg',
        'benefit' => 'Muscle-gain',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['2 boneless, skinless chicken breasts', '2 tbsp olive oil', '2 cloves garlic, minced', '1 tsp dried oregano', '1 tsp paprika', 'Juice of 1 lemon', 'Salt and black pepper to taste'],
        'instructions' => ['In a bowl, whisk together olive oil, minced garlic, oregano, paprika, lemon juice, salt, and pepper.', 'Place chicken breasts in the marinade and coat them well. Let it marinate for at least 15 minutes.', 'Preheat a grill or grill pan to medium-high heat.', 'Grill the chicken for 6-8 minutes per side, or until cooked through and grill marks appear.', 'Let the chicken rest for a few minutes before slicing.']
    ],
    [
        'id' => 11,
        'name' => 'Spicy Baked Fish',
        'image' => 'rec/Rec11.jpg',
        'benefit' => 'Muscle-gain',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 pound salmon or any white fish, fresh or frozen.', '1/4 teaspoon paprika.', '1/4 teaspoon onion powder.', '1/4 teaspoon garlic powder.', '1/8 teaspoon black pepper.', '1/8 teaspoon dried oregano.', '1/8 teaspoon dried thyme.', '1 tablespoon lemon juice.', '1 1/2 tablespoons soft melted margarine.'],
        'instructions' => ['If using frozen fish, thaw in refrigerator according to package directions.', 'Preheat oven to 350 degrees F.', 'Separate (or cut) fish into 4 pieces. Place fish in a 9x13x2 inch baking pan.', 'Combine paprika, garlic and onion powder, pepper, oregano, and thyme in a small bowl.', 'Sprinkle herb mixture and lemon juice evenly over the fish. Then drizzle melted margarine on top.', 'Bake until fish flakes easily with a fork, about 20 to 25 minutes.']
    ],
    [
        'id' => 12,
        'name' => 'Egg Parathas',
        'image' => 'rec/Rec12.jpg',
        'benefit' => 'Muscle-gain',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['2 cups whole wheat flour', '4 eggs', '1 small onion, finely chopped', '1 green chili, finely chopped', '1/4 cup chopped coriander', 'Salt to taste', 'Water to knead', 'Oil or ghee for cooking'],
        'instructions' => ['Knead a soft dough with whole wheat flour, salt, and water. Let it rest for 15 minutes.', 'In a bowl, whisk eggs with onion, chili, coriander, and salt.', 'Take a small portion of the dough and roll it into a thin circle (roti).', 'Cook one side on a hot tawa (griddle). Flip it.', 'Spread some oil on the half-cooked side. Pour a portion of the egg mixture on top.', 'Flip and cook until the egg is set and the paratha is golden brown on both sides.', 'Serve hot.']
    ],
    [
        'id' => 13,
        'name' => 'Air Fryer Eggplant Parm',
        'image' => 'rec/Rec13.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 large eggplant, sliced into 1/2-inch rounds', '1 cup breadcrumbs', '1/2 cup grated Parmesan cheese', '1 teaspoon dried oregano', '1 teaspoon garlic powder', '1/2 teaspoon salt', '1/4 teaspoon black pepper', '2 large eggs, beaten', '1 cup marinara sauce', '1 cup shredded mozzarella cheese', 'Fresh basil leaves for garnish', 'Olive oil spray'],
        'instructions' => ['Preheat the air fryer to 375°F (190°C).', 'In a bowl, combine breadcrumbs, Parmesan cheese, oregano, garlic powder, salt, and black pepper.', 'Dip each eggplant slice into the beaten eggs and then coat with the breadcrumb mixture.', 'Place the coated eggplant slices in a single layer in the air fryer basket.', 'Lightly spray the eggplant slices with olive oil.', 'Air fry for 10-12 minutes, flipping halfway through, until golden and crispy.', 'Spread a thin layer of marinara sauce in the bottom of the air fryer basket.', 'Arrange the air-fried eggplant slices on top of the sauce.', 'Spoon more marinara sauce over each eggplant slice and sprinkle with mozzarella cheese.', 'Return to the air fryer and cook for 5-7 minutes, until cheese is melted.', 'Garnish with fresh basil before serving.']
    ],
    [
        'id' => 14,
        'name' => 'Cauliflower Fried Rice',
        'image' => 'rec/Rec14.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 medium-sized cauliflower, grated', '2 tablespoons vegetable oil', '1 onion, finely chopped', '2 cloves garlic, minced', '1 carrot, diced', '1/2 cup peas', '2 eggs, beaten', '3 tablespoons soy sauce', '1 teaspoon sesame oil', 'Salt and pepper to taste', 'Green onions, chopped (for garnish)'],
        'instructions' => ['Heat vegetable oil in a large skillet or wok over medium-high heat.', 'Add chopped onions and minced garlic, sauté until fragrant.', 'Add diced carrots and peas, stir-fry until vegetables are tender.', 'Push the vegetables to one side, pour beaten eggs into the other side and scramble.', 'Combine the scrambled eggs with the vegetables.', 'Add grated cauliflower to the skillet, stirring continuously.', 'Pour soy sauce and sesame oil over the cauliflower mixture. Mix well.', 'Cook for 5-7 minutes or until the cauliflower is tender.', 'Season with salt and pepper to taste.', 'Garnish with chopped green onions and serve hot.']
    ],
    [
        'id' => 15,
        'name' => 'Air Fryer Fish Tacos',
        'image' => 'rec/Rec15.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 pound white fish fillets (cod or tilapia)', '1 tsp chili powder', '1/2 tsp cumin', '1/2 tsp paprika', 'Salt and pepper to taste', '1 tbsp olive oil', '8 small flour tortillas', 'For Avocado Salsa: 1 avocado diced, 1/2 red onion diced, 1/4 cup cilantro chopped, juice of 1 lime'],
        'instructions' => ['Preheat the air fryer to 400°F (200°C).', 'In a small bowl, mix chili powder, cumin, paprika, salt, and pepper.', 'Rub the fish fillets with olive oil and then with the spice mixture.', 'Place the fish in the air fryer basket in a single layer.', 'Air fry for 10-12 minutes or until the fish is cooked through and flakes easily.', 'While fish is cooking, prepare the avocado salsa by combining all its ingredients.', 'Warm the tortillas.', 'Assemble the tacos by placing fish on each tortilla and topping with avocado salsa.']
    ],
    [
        'id' => 16,
        'name' => 'Coconut Chickpea & Sweet Potato Curry',
        'image' => 'rec/Rec16.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 can (15 oz) chickpeas, drained and rinsed', '2 medium sweet potatoes, peeled and diced', '1 onion, finely chopped', '2 cloves garlic, minced', '1 can (14 oz) coconut milk', '1 can (14 oz) diced tomatoes', '1 cup vegetable broth', '2 tablespoons curry powder', '1 tablespoon vegetable oil', 'Salt and pepper to taste', 'Fresh cilantro for garnish'],
        'instructions' => ['Heat vegetable oil in a large pot over medium heat.', 'Add chopped onions and minced garlic. Sauté until translucent.', 'Add curry powder and stir for one minute.', 'Add diced sweet potatoes, chickpeas, coconut milk, diced tomatoes, and vegetable broth.', 'Season with salt and pepper. Bring the curry to a simmer.', 'Cover the pot and let it simmer for 20-25 minutes or until sweet potatoes are tender.', 'Garnish with fresh cilantro before serving.']
    ],
    [
        'id' => 17,
        'name' => 'Taco Salad',
        'image' => 'rec/Rec17.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 lb ground beef', '1 packet taco seasoning', '1 can (15 oz) black beans, drained and rinsed', '1 cup cherry tomatoes, halved', '1 cup shredded lettuce', '1 cup shredded cheddar cheese', '1/2 cup diced red onion', '1 avocado, diced', '1/2 cup sour cream', '1/4 cup salsa', 'Tortilla chips for serving'],
        'instructions' => ['In a skillet, brown the ground beef. Drain excess fat.', 'Add the taco seasoning according to the packet instructions.', 'In a large bowl, combine the cooked beef, black beans, cherry tomatoes, lettuce, cheddar cheese, and red onion.', 'Toss the salad ingredients together until well mixed.', 'In a small bowl, mix together sour cream and salsa to create the dressing.', 'Drizzle the dressing over the salad and toss again.', 'Gently fold in the diced avocado.', 'Serve the taco salad with crushed tortilla chips on top.']
    ],
    [
        'id' => 18,
        'name' => 'Cabbage Parmesan',
        'image' => 'rec/Rec18.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 medium-sized cabbage, cut into thick wedges', '1 cup grated Parmesan cheese', '1 cup breadcrumbs', '2 eggs, beaten', '1 cup marinara sauce', '1 cup shredded mozzarella cheese', '2 cloves garlic, minced', '1 teaspoon dried oregano', 'Salt and pepper to taste', 'Olive oil for drizzling'],
        'instructions' => ['Preheat the oven to 375°F (190°C).', 'Mix breadcrumbs, Parmesan cheese, garlic, oregano, salt, and pepper in a bowl.', 'Dip each cabbage wedge into the beaten eggs, then coat with the breadcrumb mixture.', 'Place the coated cabbage wedges in a baking dish.', 'Drizzle olive oil over the top and bake for 25-30 minutes until golden.', 'Remove from the oven, pour marinara sauce over the cabbage, and top with mozzarella cheese.', 'Return to the oven and bake for an additional 15 minutes, or until the cheese is melted and bubbly.', 'Serve hot.']
    ],
    [
        'id' => 19,
        'name' => 'Egg Bhurji',
        'image' => 'rec/Rec3.jpg',
        'benefit' => 'Weight-loss',
        'category' => 'Non-Veg',
        'nutrients' => ['Calories' => 273, 'Protein' => 25, 'Fat' => 11, 'Carbohydrates' => 23, 'Fiber' => 6, 'Calcium' => 87, 'Iron' => 3],
        'ingredients' => ['4 eggs', '1 large onion, finely chopped', '2 medium tomatoes, chopped', '1 green chili, chopped', '1/2 inch ginger, grated', '1/2 tsp turmeric powder', '1/2 tsp red chili powder', '1/2 tsp garam masala', '2 tbsp oil', 'Salt to taste', 'Fresh coriander for garnish'],
        'instructions' => ['Heat oil in a pan. Add chopped onions and sauté until they turn translucent.', 'Add grated ginger and green chili. Sauté for a minute.', 'Add chopped tomatoes and cook until they become soft.', 'Add turmeric powder, red chili powder, and salt. Mix well.', 'Break the eggs directly into the pan and scramble them.', 'Cook, stirring continuously, until the eggs are cooked to your liking.', 'Sprinkle garam masala and garnish with fresh coriander.', 'Serve hot with roti or bread.']
    ],
    [
        'id' => 20,
        'name' => 'Butternut Squash Curry',
        'image' => 'rec/Rec20.jpg',
        'benefit' => 'Weight-gain',
        'category' => 'Veg',
        'nutrients' => ['Calories' => 300, 'Protein' => 25, 'Fat' => 15, 'Carbohydrates' => 10, 'Fiber' => 3, 'Sugar' => 2, 'Sodium' => 500],
        'ingredients' => ['1 medium-sized butternut squash, peeled and diced', '1 onion, finely chopped', '2 cloves garlic, minced', '1-inch ginger, grated', '1 can (400 ml) coconut milk', '2 tablespoons curry powder', '1 teaspoon turmeric powder', 'Salt and pepper to taste', '2 tablespoons vegetable oil', 'Fresh cilantro leaves for garnish', 'Cooked rice or naan for serving'],
        'instructions' => ['Heat vegetable oil in a large pan over medium heat.', 'Add chopped onion and cook until translucent.', 'Add minced garlic and grated ginger, sauté for a minute.', 'Add curry powder and turmeric powder. Stir well.', 'Add diced butternut squash to the pan and mix until coated with spices.', 'Pour in the coconut milk and bring the mixture to a simmer. Cover and cook until the squash is tender (about 15-20 minutes).', 'Season with salt and pepper to taste.', 'Garnish with fresh cilantro leaves and serve over rice or with naan.']
    ]
];

// 2. =================================================================
//    FILTERING LOGIC
//    This code checks if the form was submitted. If so, it filters
//    the $recipes array based on the min and max calorie inputs.
// ===================================================================
$filtered_recipes = $recipes; // Start by assuming we show all recipes

if ($_SERVER["REQUEST_METHOD"] == "GET" && (isset($_GET['min_calories']) || isset($_GET['max_calories']))) {
    
    // Sanitize inputs to ensure they are numbers
    $min_calories = !empty($_GET['min_calories']) ? (int)$_GET['min_calories'] : 0;
    $max_calories = !empty($_GET['max_calories']) ? (int)$_GET['max_calories'] : PHP_INT_MAX;

    // If max calories is not provided but min is, set max to a very large number
    if ($min_calories > 0 && $max_calories === PHP_INT_MAX) {
        // This is a reasonable upper bound if max is not set.
    }

    // If max is less than min, it's an invalid range. Show no results.
    if ($max_calories < $min_calories) {
        $filtered_recipes = [];
    } else {
        $result = [];
        foreach ($recipes as $recipe) {
            $calories = $recipe['nutrients']['Calories'];
            if ($calories >= $min_calories && $calories <= $max_calories) {
                $result[] = $recipe;
            }
        }
        $filtered_recipes = $result;
    }
}
?>

<head>
    <title>FitBite - Recipes</title>
    <link rel="stylesheet" href="recepies.css">
    <link rel="icon" href="img/icon.png">
    <style>
        /* Added some basic styling for the new filter form */
        .filter-container {
            background-color: #f0f0f0;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 800px;
            text-align: center;
        }
        .filter-container form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }
        .filter-container label {
            font-weight: bold;
        }
        .filter-container input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100px;
        }
        .filter-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .filter-container button:hover {
            background-color: #0056b3;
        }
        .no-results {
            text-align: center;
            font-size: 1.2em;
            color: #555;
            margin: 40px auto;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="filter-container">
        <h2>Filter Recipes by Calories</h2>
        <form action="recepies.php" method="GET">
            <div>
                <label for="min_calories">Min Calories:</label>
                <input type="number" id="min_calories" name="min_calories" min="0" placeholder="e.g., 100" value="<?php echo isset($_GET['min_calories']) ? htmlspecialchars($_GET['min_calories']) : ''; ?>">
            </div>
            <div>
                <label for="max_calories">Max Calories:</label>
                <input type="number" id="max_calories" name="max_calories" min="0" placeholder="e.g., 300" value="<?php echo isset($_GET['max_calories']) ? htmlspecialchars($_GET['max_calories']) : ''; ?>">
            </div>
            <button type="submit">Filter</button>
        </form>
    </div>


    <div class="card-container">
        <?php if (!empty($filtered_recipes)): ?>
            <?php foreach ($filtered_recipes as $recipe): ?>
                <div id="card">
                    <img src="<?php echo htmlspecialchars($recipe['image']); ?>" alt="<?php echo htmlspecialchars($recipe['name']); ?>" width="200px">
                    <div class="card-content">
                        <h2> <b> <i> <?php echo htmlspecialchars($recipe['name']); ?> </b> </i> </h2>
                        <h3>Beneficial for <?php echo htmlspecialchars($recipe['benefit']); ?></h3>
                        <table>
                            <tr>
                                <th>Category</th>
                                <th><?php echo htmlspecialchars($recipe['category']); ?></th>
                            </tr>
                            <tr>
                                <th>Nutrient</th>
                                <th>Amount</th>
                            </tr>
                            <?php foreach ($recipe['nutrients'] as $nutrient => $amount): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($nutrient); ?></td>
                                <td>
                                    <?php 
                                        echo htmlspecialchars($amount); 
                                        if ($nutrient == 'Calories') echo ' kcal';
                                        elseif ($nutrient == 'Protein' || $nutrient == 'Fat' || $nutrient == 'Carbohydrates' || $nutrient == 'Fiber' || $nutrient == 'Sugar') echo 'g';
                                        elseif ($nutrient == 'Sodium' || $nutrient == 'Cholestrol' || $nutrient == 'Calcium' || $nutrient == 'Iron') echo 'mg';
                                    ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        
                        <h2>Ingredients:</h2>
                        <ul>
                            <?php foreach ($recipe['ingredients'] as $ingredient): ?>
                                <li><?php echo htmlspecialchars($ingredient); ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <h2>Instructions:</h2>
                        <ol>
                            <?php foreach ($recipe['instructions'] as $instruction): ?>
                                <li><?php echo htmlspecialchars($instruction); ?></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="no-results">No recipes found matching your criteria. Please try a different calorie range.</p>
        <?php endif; ?>

    </div>
    <br><br>
</body>

<?php
include 'footer.php';
?>