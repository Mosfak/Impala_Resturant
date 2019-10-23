

var food=[
    
  ["Chicken Burger",0],  
  ["Beef Burger",0],  
  ["Chicken biriyani",0],  
  ["Chicken Tanduri",0],  
  ["Item1",0],  
  ["Item2",0]  
    
];

var price=[ 120,150,120,300,20,70 ];
var sum=0;


function Click( name){
    for(var i=0;i<food.length;i++){
        if(name==food[i][0]){
            food[i][1]++;
            sum=sum+price[i];
        }
    }
   
    
}





function print(){
    for(var i=0;i<food.length;i++){
        console.log(food[i][0]+"----"+food[i][1]+"---"+price[i]);
        console.log("\n"+sum);
    }
    
}

