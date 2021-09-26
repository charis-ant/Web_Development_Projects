function counter_function() {
    var text = document.getElementById("text");
    var original = text.value.split(" ");
    
    var word_counter = 0; //declare variable for counting the words of text

    var words = []; //declare array to fill with words of text (only one recurrence per word)
    var recurrence = []; //declare array for recurrence of every word 

    var i; //variable used for indexing
    var j; //variable used for indexing

    //filling array words with one recurrence of every word only if it has more that 4 letters
    for (i = 0; i < original.length; i++){
        if (((original[i].length) >= 4) && (words.includes(original[i])== false)){ 
            words.push(original[i]);
            word_counter = word_counter + 1;
        }
    }

    //initializing recurrence array with 0 in order to count the recurrences
    for (i = 0; i < words.length; i++){ 
        recurrence[i] = 0; 
    }

    //counting recurrence of every word
    for (i = 0; i < words.length; i++){ 
        for (j = 0; j < original.length; j++){
            if (words[i] ==  original [j]){
                recurrence[i] = recurrence[i] + 1;
            }
        }
    }

    //sorting arrays in descending order using bubblesort
    var temp1;
    var temp2;
    var swapped;
    for (i = 0; i < recurrence.length; i++){
        swapped = false;
        for (j = 0; j < recurrence.length; j++){
            if (recurrence[j] < recurrence[j + 1]){
                temp1 = recurrence[j];
                temp2 = words[j];
                recurrence[j] = recurrence[j + 1];
                words[j] = words[j + 1];
                recurrence[j + 1] = temp1;
                words[j + 1] = temp2;
               swapped = true;
            }
        }
        if (swapped == false){
            break;
        }
    }

    //printing results in window alert
    if (word_counter == 0){
        return alert("You typed 0 words");
    }else{
        if (words.length >= 5){
            return alert("1. " + words[0] + " (" + recurrence[0] + " times)\n2. " + words[1] + " (" + recurrence[1] + " times)\n3. " 
            + words[2] + " (" + recurrence[2] + " times)\n4. "  + words[3] + " (" + recurrence[3] + " times)\n5. "  + words[4] + 
            " (" + recurrence[4] + " times)");
        }else if (words.length == 4){
            return alert("1. " + words[0] + " (" + recurrence[0] + " times)\n2. " + words[1] + " (" + recurrence[1] + " times)\n3. " 
            + words[2] + " (" + recurrence[2] + " times)\n4. "  + words[3] + " (" + recurrence[3] + " times)");
        }else if (words.length == 3){
            return alert("1. " + words[0] + " (" + recurrence[0] + " times)\n2. " + words[1] + " (" + recurrence[1] + " times)\n3. " 
            + words[2] + " (" + recurrence[2] + " times)");
        }else if (words.length == 2){
            return alert("1. " + words[0] + " (" + recurrence[0] + " times)\n2. " + words[1] + " (" + recurrence[1] + " times)");
        }else if (words.length == 1){
            return alert("1. " + words[0] + " (" + recurrence[0] + " times)");
        }
    }
  }