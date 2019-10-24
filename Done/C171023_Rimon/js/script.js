var food=[
                
    ["Chicken Burger",0],  
    ["Beef Burger",0],  
    ["Chicken Biriyani",0],  
    ["Chicken Tanduri",0],  
    ["Item1",0],  
    ["Item2",0]  
    
];

var price=[ 120,150,120,300,20,70 ];
var sum=0;

function update(){
    for(var i=0;i<food.length;i++){
        document.getElementById(food[i][0]).innerHTML=food[i][1]*price[i];
    }
}


function Click(name){
    for(var i=0;i<food.length;i++){
        if(name==food[i][0]){
            food[i][1]++;
            sum=sum+price[i];
        }
    }

    document.getElementById('ttl').innerHTML=(sum);
    update();               
    
}





function print(){
    for(var i=0;i<food.length;i++){
        console.log(food[i][0]+"----"+food[i][1]+"---"+price[i]);
        console.log("\n"+sum);
    }
    
}

