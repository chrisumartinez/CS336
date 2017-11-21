
//on button press:
function onButtonPress(){
    var  cityArray = ['Barcelona', 'Madrid', 'Los Angeles', 'Santa Barbara',
    'Carpinteria', 'San Luis Obispo', 'Monterey', 'Seaside', 'Culver City', 'Echo Park',
    'Moscow', 'Houston', 'Salt Lake City', 'Calgary', 'Vancouver', 'Paris', 'Minsk', 'Tijuana', 'Osaka'
    , 'Tokyo', 'Hong Kong', 'Seoul'];
    var footballClubLabels = ['F.C', 'Dynamo', 'Tigers', 'Flames', 'Dodgers', 'United', 'Galaxy', 'S.C',  'Orcs',
    'Trojans', 'Broncos', 'Blackhawks', 'Ducks', 'Angels', 'Athletics', 'Titans', 'Cowboys', 
    'Giants', 'Eagles', 'Bears', 'Lions'];
    
    //completed Name:
    var nameArray = [];
    
    
    //loop through function 3 times:
    for(var i = 0; i < 3; i++){
        
    
    //shuffle arrays:
    shuffleArray(cityArray);
    shuffleArray(footballClubLabels);
    
    //get random city index:
    var randomCityIndex = Math.floor(Math.random(0, cityArray.length));
    var randomFCIndex = Math.floor(Math.random(0, footballClubLabels.length));
    
    //get random city/label:
    var randomCity = cityArray[randomCityIndex];
    var randomFCLabel = footballClubLabels[randomFCIndex];
    
    //remove the random city/label from the arrays:
    cityArray.splice(randomCityIndex, 1);
    footballClubLabels.splice(randomFCIndex, 1);
    
    
    //check for placement of F.C. or S.C.
    var name = "";
    if(randomFCLabel === "F.C." || randomFCIndex === "S.C."){
        name += randomFCLabel + " " + randomCity;
    } else{
        name += randomCity + " " + randomFCLabel;
    }
    
    //DEBUGGING
    console.log(name);
    
    //add to name array:
    nameArray.push(name);

    }
    
    //display names:
    for(var j = 0; j < 3; j++){
        var name = nameArray.pop();
        console.log(name);
        $('#names').append(name);
        $('#names').append('<br>');
    }
}

/*
Shuffles the Array.
@return the array shuffled.
*/
function shuffleArray(array){
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}