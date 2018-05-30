function button1(form){
	
	var km = 12;
	var osnov = 2000;
	var k = 1;
	var ind = document.getElementById("select_tar").selectedIndex; // ѕолучаем индекс (в нашем случае его значение 1) // ѕолучаем значение выделенного элемента (в нашем случае fruit2).
	var ind2 = document.getElementById("select_okr").selectedIndex; // ѕолучаем индекс (в нашем случае его значение 1)
	var quantity = document.getElementById("chis").value;
	var price = quantity;
	var quas2 = document.getElementById("kilom").value;
	var kilom = quas2;
	
	if(price < 10){
		price = 10;
	}
	
	if(ind == 0){
		k = 30;
				if(ind2 == 0){
					form.total1.value = Math.round((k*osnov*1)+(price*64)).toLocaleString() ;
				}
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*64)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*64)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*64)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*64)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*64)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*64)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*64)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*64)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*64)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*64)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*64)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*64)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*64)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*64)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*64)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*64)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*64)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*64)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1))+(price*64)).toLocaleString() ;
				else if(ind2 == 20){
					form.total1.value = Math.round(k*2100+(price*64)+(km*2)*kilom).toLocaleString() ;
				}

			}
			else if(ind == 1){
				k = 21;
				if(ind2 == 0)
					form.total1.value = Math.round((k*(osnov*1))+(price*65)).toLocaleString() ;
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*65)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*65)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*65)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*65)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*65)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*65)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*65)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*65)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*65)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*65)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*65)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*65)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*65)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*65)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*65)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*65)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*65)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1))+(price*65)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*65)).toLocaleString() ;
				else if(ind2 == 20)
					form.total1.value = Math.round((k*2100+(price*65)+(km*2)*kilom)).toLocaleString() ;
				
			}
			else if(ind == 2){
				k = 12;
				if(ind2 == 0)
					form.total1.value = Math.round((k*(osnov*1))+(price*66)).toLocaleString() ;
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*66)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*66)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*66)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*66)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*66)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*66)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*66)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*66)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*66)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*66)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*66)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*66)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1))+(price*66)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*66)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*66)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*66)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*66)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*66)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1))+(price*66)).toLocaleString() ;
				else if(ind2 == 20)
					form.total1.value = Math.round((k*2100+(price*66)+(km*2)*kilom)).toLocaleString() ;
			}
			else if(ind == 3){
				k = 8;
				if(ind2 == 0)
					form.total1.value = Math.round((k*(osnov*1))+(price*67)).toLocaleString() ;
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*67)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*67)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*67)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*67)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*67)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*67)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*67)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*67)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*67)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*67)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*67)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*67)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*67)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*67)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*67)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*67)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*67)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1))+(price*67)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*67)).toLocaleString() ;
				else if(ind2 == 20)
					form.total1.value = Math.round((k*2100+(price*67)+(km*2)*kilom)).toLocaleString() ;
			}
			else if(ind == 4){
				k = 4;
				if(ind2 == 0)
					form.total1.value = Math.round((k*(osnov*1))+(price*68)).toLocaleString() ;
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*68)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*68)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*68)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*68)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*68)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*68)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*68)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*68)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*68)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*68)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*68)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*68)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*68)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*68)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*68)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*68)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*68)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1))+(price*68)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*68)).toLocaleString() ;
				else if(ind2 == 20)
					form.total1.value = Math.round((k*2100+(price*68)+(km*2)*kilom)).toLocaleString();
			}
			else if(ind == 5){
				k = 2;
				if(ind2 == 0)
					form.total1.value = Math.round((k*(osnov*1))+(price*69)).toLocaleString() ;
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*69)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*69)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*69)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*69)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*69)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*69)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*69)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*69)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*69)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*69)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*69)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*69)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*69)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*69)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*69)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*69)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*69)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1))+(price*69)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*69)).toLocaleString() ;
				else if(ind2 == 20)
					form.total1.value = Math.round((k*2100+(price*69)+(km*2)*kilom)).toLocaleString() ;
			}
			else if(ind == 6){
				if(ind2 == 0)
					form.total1.value = Math.round((k*(osnov*1))+(price*70)).toLocaleString() ;
				else if(ind2 == 1)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*70)).toLocaleString() ;
				else if(ind2 == 2)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*70)).toLocaleString() ;
				else if(ind2 == 3)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*70)).toLocaleString() ;
				else if(ind2 == 4)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*70)).toLocaleString() ;
				else if(ind2 == 5)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*70)).toLocaleString() ;
				else if(ind2 == 6)
					form.total1.value = Math.round((k*(osnov*1))+(price*70)).toLocaleString() ;
				else if(ind2 == 7)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*70)).toLocaleString() ;
				else if(ind2 == 8)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*70)).toLocaleString() ;
				else if(ind2 == 9)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*70)).toLocaleString() ;
				else if(ind2 == 10)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*70)).toLocaleString() ;
				else if(ind2 == 11)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*70)).toLocaleString() ;
				else if(ind2 == 12)
					form.total1.value = Math.round((k*(osnov*1.02))+(price*70)).toLocaleString() ;
				else if(ind2 == 13)
					form.total1.value = Math.round((k*(osnov*1.03))+(price*70)).toLocaleString() ;
				else if(ind2 == 14)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*70)).toLocaleString() ;
				else if(ind2 == 15)
					form.total1.value = Math.round((k*(osnov*1.04))+(price*70)).toLocaleString() ;
				else if(ind2 == 16)
					form.total1.value = Math.round((k*(osnov*1.25))+(price*70)).toLocaleString() ;
				else if(ind2 == 17)
					form.total1.value = Math.round((k*(osnov*1.05))+(price*70)).toLocaleString() ;
				else if(ind2 == 18)
					form.total1.value = Math.round((k*(osnov*1))+(price*70)).toLocaleString() ;
				else if(ind2 == 19)
					form.total1.value = Math.round((k*(osnov*1.01))+(price*70)).toLocaleString() ;
				else if(ind2 == 20)
					form.total1.value = Math.round((k*2100+(price*70)+(km*2)*kilom)).toLocaleString() ;
			}
	}
	
	


			