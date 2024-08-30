// Options the user could type in
let date=new Date(); 
var currentdate=new Date().toLocaleDateString();
var time=new Date().toLocaleTimeString();
const prompts = [
    ["hi", "hey", "hello", "good morning", "good afternoon"],
    ["how are you", "how is life", "how are things"],
    ["what are you doing", "what is going on", "what is up"],
    ["how old are you"],
    ["who are you", "are you human", "are you bot", "are you human or bot"],
    ["who created you", "who made you"],
    [
      "your name please",
      "your name",
      "may i know your name",
      "what is your name",
      "what call yourself"
    ],
    ["i love you"],
    ["happy", "good", "fun", "wonderful", "fantastic", "cool"],
    ["bad", "bored", "tired"],
    ["help me", "tell me story", "tell me joke"],
    ["ah", "yes", "ok", "okay", "nice"],
    ["bye", "good bye", "goodbye", "see you later"],
    ["what should i eat today"],
    ["bro"],
    ["what", "why", "how", "where", "when"],
    ["no","not sure","maybe","no thanks"],
    [""],
    ["haha","ha","lol","hehe","funny","joke"],
    ["date"],
    ["time"],
    ["tell joke"],
    [
    ["What types of pets are available for adoption?", "Do you have dogs available?", "Are there cats for adoption?", "What pets can I adopt?"],
    ["How can I adopt a pet?", "What is the adoption process?", "How do I apply to adopt a pet?", "What do I need to do to adopt a pet?"],
    ["What are the adoption fees?", "How much does it cost to adopt a pet?", "Are there any fees for adopting a pet?", "What are the costs associated with adoption?"],
    ["Can I visit the shelter before adopting?", "Is it possible to meet the pet before adoption?", "Can I visit the shelter to see the pets?", "Do I need to schedule a visit?"],
    ["What should I prepare before bringing a pet home?", "How do I prepare for a new pet?", "What do I need to have before adopting a pet?", "Are there any preparations needed for bringing a pet home?"],
    ["Are the pets vaccinated?", "Are the animals up-to-date on vaccinations?", "Do the pets come vaccinated?", "What vaccinations do the pets have?"],
    ["Do you offer post-adoption support?", "Is there support after adoption?", "What kind of help do you offer after adoption?", "Can I get help after adopting a pet?"],
    ["Can I return the pet if things don’t work out?", "What if the adoption doesn’t work out?", "Can I return the pet if needed?", "What is the policy for returning an adopted pet?"],
    ["Do you have any volunteer opportunities?", "Can I volunteer at the shelter?", "Are there ways to help out as a volunteer?", "How can I volunteer?"],
    ["How can I donate to your organization?", "What are the ways to donate?", "Can I make a donation?", "How do I support your shelter financially?"],
  
  // Possible responses, in corresponding order
  
  const replies = [
    ["Hello!", "Hi!", "Hey!", "Hi there!","Howdy"],
    
    [
      "Fine... how are you?",
      "Pretty well, how are you?",
      "Fantastic, how are you?"
    ],
    [
      "Nothing much",
      "About to go to sleep",
      "Can you guess?",
      "I don't know actually"
    ],
    ["I am infinite"],
    ["I am just a bot", "I am a bot. What are you?"],
    
    ["Anas Vatsal Samarth Mitesh"],
    ["I am chitti"],
    ["I love you too", "Me too"],
    ["Have you ever felt bad?", "Glad to hear it"],
    ["Why?", "Why? You shouldn't!", "Try watching TV"],
    ["What about?", "Once upon a time..."],
    ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
    // ["varata mame durr"],
    ["Bye", "Goodbye", "See you later"],
    ["Sushi", "Pizza"],
    ["Bro!"],
    ["Great question"],
    ["That's ok","I understand","What do you want to talk about?"],
    ["Please say something :("],
    ["Haha!","Good one!"],
    ["  The basic concept of this project  Food Waste Management is to collect theexcess/leftover food from donors such as hotels, restaurants, marriage halls, etc and distribute to  the  needy people"],
    [currentdate],
    [time],
    ["joke ha ha .."],
     ["We have a variety of pets available for adoption, including dogs, cats, rabbits, and sometimes birds or other small animals."],
    
    ["To adopt a pet, visit our shelter or website to fill out an adoption application. After reviewing your application, we may schedule a meeting with the pet and finalize the adoption process."],
    
    ["Adoption fees vary depending on the type of pet and its age. Generally, fees range from $50 to $250. Check our website or contact us directly for specific fees."],
    
    ["Yes, you are welcome to visit the shelter to meet the pets and see their living conditions. It's a good idea to schedule a visit in advance to ensure we can accommodate you."],
    
    ["Before bringing a pet home, ensure you have essential supplies such as food, a water bowl, a bed, a litter box (for cats), toys, and grooming tools. Additionally, pet-proof your home to ensure it's safe for the new arrival."],
    
    ["Yes, all of our pets are up-to-date on their vaccinations and have received a basic health check. Specific vaccination details will be provided upon adoption."],
    
    ["Yes, we offer post-adoption support to help you with any questions or issues that arise after bringing your new pet home. This may include advice on training, behavior, and health."],
    
    ["If the adoption doesn’t work out, please contact us. We have a return policy to ensure the pet can be rehomed appropriately. We ask that you return the pet to our shelter or contact us for guidance."],
    
    ["Yes, we have various volunteer opportunities available. You can help with animal care, events, or administrative tasks. Please visit our website or contact us to learn more about how to get involved."],
    
    ["You can donate to our organization through our website, by mailing a check, or by visiting our shelter in person. Donations can be made as a one-time gift or set up as a recurring contribution."]
];


  
  // Random for any other user input
  
  const alternative = [
    // "Same",
    // "Go on...",
    // "Bro...  i don't know",
    // "Try again",
    // // "I'm listening...:/",
    // "I don't understand ",
    " 😢sorry i am still under development "
  ]
  
  // Whatever else you want :)
  
  const coronavirus = ["Please stay home", "Wear a mask", "Fortunately, I don't have COVID", "These are uncertain times"]