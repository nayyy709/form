var total=0;
    function UpdateCost(elem) {
     
        if (elem.checked == true) { 
            total += Number(elem.value); 
        }else{
            total -=Number(elem.value);
        }
     
        document.getElementById('total').value = total.toFixed(0);
    }



    var total2=0;
    function UpdateCost2(elem2) {
     
        if (elem2.checked == true) { 
            total2 += Number(elem2.value); 
        }else{
            total2 -=Number(elem2.value);
        }
     
        document.getElementById('total2').value = total2.toFixed(0);
    }