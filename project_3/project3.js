var input = document.getElementById("input");   //passing the input given by the user
document.getElementById("sum").innerHTML = "<h3>The sum of unique numbers is: -<h3>";   //showing default text followed by "-" if the user has not typed anything

input.addEventListener('keyup', function(){ //Event listener for real-time calculation
    calculator();   //calling function calculator
});

function calculator(){
    var inp = document.getElementById("input"); //passing user's input to variable inp
    var input_array = inp.value.split(" "); //creating array filled with user's input
        
    var numbers = [];   //declaring array numbers to be filled with number-type input
    var black_list = [];    //declaring array black_list to be filled with duplicate numbers
    var sum = 0;    //declaring variable sum, to be used for summation of numbers
    var i;  //declaring variable i to be used in iteration

    //iterating through input_array and copying the number-type values to array numbers
    for (i = 0; i < input_array.length; i++){
        if (isNaN(input_array[i]) == false){
           numbers.push(input_array[i]);
        }
    }
    
    //iterating through numbers array turning type-string numbers to type-numbers
    for (i = 0; i < numbers.length; i++){
          numbers[i] = Number(numbers[i]);
    }

    numbers = numbers.filter(e => e);   //removing whitespace values from array numbers
    
    //iterating through numbers array in order to calculate the summation
    for (i = 0; i < numbers.length; i++){
        var done = false;   
        if (i > 0){
            for (var j = 0; j < i; j++){    //iterating through sub-array of numbers array
                if (numbers[i] == numbers[j]){  //condition to check if the same number has been typed more than once
                    if (black_list.includes(numbers[i])){ //if number is already in the black_list array, don't make any changes to sum
                        done = true;
                        break;
                    }else{  //if this is the first time coming across the same number
                        black_list.push(numbers[i]); //pushing number in black_list array
                        sum = sum - numbers[i]; //removing the number from the sum
                        done = true;
                        break;
                    }
                }
            }
        }   
        if (done == false){
            sum = sum  + numbers[i];    //adding the value of number to sum
        }
    }
    
    if (numbers.length > 20){   //if user has typed more than 20 numbers
        return alert("No more than 20 numbers");    //window alert will pop up
    }
    else{
        if (numbers.length === 0){   //if the user hasn't typed any number
            document.getElementById("sum").innerHTML = "<h3>The sum of unique numbers is: -<h3>"; //printing "The sum of unique numbers is: -"
        }
        else{
            var output = "<h3>The sum of unique numbers is: " + sum + "</h3>";  //declaring variable output with default text followed by the value of sum
            document.getElementById("sum").innerHTML = output;  //printing message and sum of unique numbers in page
        }
    }
}