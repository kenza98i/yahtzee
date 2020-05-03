"use strict";
let cpt = 3;

function Des() {
  let compteur = document.getElementById('Compteur')
  if (cpt > 0) {
    for (let i = 1; i < 6; i++) {
      if ( document.getElementById('des'+i).hasAttribute('false',false) == false) {
        let aleatoire = (Math.random() * 6) + 1;
        majDes('des'+i, Math.floor(aleatoire));
      }
    }
    cpt--;
    compteur.innerHTML = cpt;
    As();
    Deux();
    trois()
    quatre();
    cinq();
    six();
    brelan();
    petitesuite();
	grandesuite();
	yahtzee();
    full();
    chance();
	carre();
  }
}


function majDes(id, nbr) {
  let des = document.getElementById(id);
  let content =  `<img  id="${id}" src="${nbr}.gif"/>`
  des.innerHTML = content;
  des.value = nbr;
}



function desactiver(id) {
  let bloquer = document.getElementById(id);
  if (bloquer.hasAttribute('false',false) == false) {
    bloquer.setAttribute('false', false);
    bloquer.style = 'border: 4px solid rgb(139,0,0);'
  }else {
    bloquer.removeAttribute('false');
    bloquer.style = 'border: 2px solid rgb(139,0,0);'
    }
  }


function As(){
 let des = document.getElementsByClassName('des');
 let des2 = document.getElementById('1');
 if (des2.hasAttribute("disabled") == false) {
 let compteur = 0;
 for(let i = 0; i < des.length; i++){

   if ( des[i].value == 1 ) {
     compteur++;
   }
  }
  let resultat = 1 * compteur;
  let as = document.getElementById('as');
  as.value = resultat;
 }
}

function Deux(){
 let des = document.getElementsByClassName('des');
  let des2 = document.getElementById('2');
 if (des2.hasAttribute("disabled") == false) {
 let compteur = 0;
 for(let i = 0; i < des.length; i++){

   if ( des[i].value == 2) {
     compteur++;
   }
  }
  let resultat = 2 * compteur;
  let deux = document.getElementById('deux');
  deux.value = resultat;
 }
}
function trois(){
 let des = document.getElementsByClassName('des');
  let des2 = document.getElementById('3');
 if (des2.hasAttribute("disabled") == false) {
 let compteur = 0;
 for(let i = 0; i < des.length; i++){

   if ( des[i].value == 3 ) {
     compteur++;
   }
  }
  let resultat = 3 * compteur;
  let trois = document.getElementById('trois');
  trois.value = resultat;
 }
}
function quatre(){
 let des = document.getElementsByClassName('des');
  let des2 = document.getElementById('4');
 if (des2.hasAttribute("disabled") == false) {
 let compteur = 0;
 for(let i = 0; i < des.length; i++){

   if ( des[i].value == 4 ) {
     compteur++;
   }
  }
  let resultat = 4 * compteur;
  let quatre = document.getElementById('quatre');
  quatre.value = resultat;
 }
}
function cinq(){
 let des = document.getElementsByClassName('des');
  let des2 = document.getElementById('5');
 if (des2.hasAttribute("disabled") == false) {
 let compteur = 0;
 for(let i = 0; i < des.length; i++){

   if ( des[i].value == 5 ) {
     compteur++;
   }
  }
  let resultat = 5 * compteur;
  let cinq = document.getElementById('cinq');
  cinq.value = resultat;
 }
}
function six(){
 let des = document.getElementsByClassName('des');
  let des2 = document.getElementById('6');
 if (des2.hasAttribute("disabled") == false) {
 let compteur = 0;
 for(let i = 0; i < des.length; i++){

   if ( des[i].value == 6 ) {
     compteur++;
   }
  }
  let resultat = 6 * compteur;
  let six = document.getElementById('six');
  six.value = resultat;
 }
}

function chance(){
	  let des2 = document.getElementById('cha');
 if (des2.hasAttribute("disabled") == false) {
   let chance = document.getElementById('chance');
  chance.value = sommeDes();
 }
}

function sommeDes(){
 let des = document.getElementsByClassName('des');
 let resultat = 0;
 for(let i = 0; i < des.length; i++){
   resultat += parseInt(des[i].value);
   }
   let chance = document.getElementById('chance');
  return resultat;
}

function yahtzee(){
 let des2 = document.getElementById('yah');
 if (des2.hasAttribute("disabled") == false) {
 let des = document.getElementsByClassName('des');
  let yahtzee = document.getElementById('yahtzee');
 let cpt = 1;
 let val = des[0].value;
 for(let i = 1; i < des.length; i++){
   if ( des[i].value != val) {
	  return yahtzee.value = 0;
   }
}

   return yahtzee.value = 50;
 }
}

function brelan(){
	  let des2 = document.getElementById('bre');
 if (des2.hasAttribute("disabled") == false) {
let resultat = 0;
 let des = document.getElementsByClassName('des');
  let brelan = document.getElementById('brelan');
  brelan.value = 0;
  for (let j = 0 ; j < des.length ; j++){
	   let val = des[j].value;
	   let cpt = 0;
		for(let i = j+1; i < des.length; i++){
			if ( des[i].value == val) {
				cpt ++;

			}
		 if ( cpt == 2) {
		brelan.value = sommeDes();
			}

          }

}
 }
}


function carre(){
	  let des2 = document.getElementById('car');
 if (des2.hasAttribute("disabled") == false) {
let resultat = 0;
 let des = document.getElementsByClassName('des');
  let carre = document.getElementById('carre');
  for (let j = 0 ; j < des.length ; j++){
	   let val = des[j].value;
	   let cpt = 0;
		for(let i = j+1; i < des.length; i++){
			if ( des[i].value == val) {
				cpt ++;

			}
		 if ( cpt == 3) {
		return	carre.value = sommeDes();
			}

          }

}
return carre.value = 0;
 }
}

function full(){
	  let des2 = document.getElementById('ful');
 if (des2.hasAttribute("disabled") == false) {
let resultat = 0;
 let des = document.getElementsByClassName('des');
  let full = document.getElementById('full');
  for (let j = 0 ; j < des.length ; j++){
	   let val = des[j].value;
	   let cpt = 0;
	   let cpt2 = 0;
		for(let i = j+1; i < des.length; i++){
			if ( des[i].value == val) {
				cpt ++;
			}
		 if ( cpt == 2) {
			 let k=0;
			while(k < des.length && des[k].value==val){
				++k;
			}
			let val2= des[k].value;
			for( let z=k+1; z < des.length;z++){
				if ( des[z].value == val2) {
				cpt2 ++;
				}
			  if ( cpt2 == 1) {
				return	full.value = 25;
				}

          }
         }
        }
	}
return full.value = 0;
 }
}

function des_element(nbr){
	 let des = document.getElementsByClassName('des');
let cpt = 0;
 for(let i =0 ; i < des.length; i++){
	  if( des[i].value == nbr ) {
	  cpt ++;
   }

}
return cpt;
}

function grandesuite(){
	  let des2 = document.getElementById('gra');
 if (des2.hasAttribute("disabled") == false) {
     let grandesuite = document.getElementById('grandesuite');

	 if ((des_element(2) == 1 && des_element(3) == 1 &&  des_element(4) == 1 &&  des_element(5) == 1 ) && ( des_element(6) == 1 || des_element(1) == 1)) {
	return grandesuite.value = 40 ;

  }
  return grandesuite.value = 0;
 }
}
function petitesuite(){
	  let des2 = document.getElementById('pet');
 if (des2.hasAttribute("disabled") == false) {
	let petitesuite = document.getElementById('petitesuite');
if ((des_element(3) >= 1 &&  des_element(4) >= 1) && ( (des_element(1) >= 1 && des_element(2) >= 1) || (des_element(2) >= 1 && des_element(5) >= 1)|| (des_element(5) >= 1 && des_element(6) >= 1))){
	return petitesuite.value = 30;

  }
  return petitesuite.value = 0;
 }
}

function m(k,i){
    switch (k) {
    case 0 : document.getElementById("phaute"+i).style.visibility = "visible";
    break;
    case 1 : document.getElementById("pbasse"+i).style.visibility = "visible";
    break;
    }
}

function b(k,i){
    switch (k) {
    case 0 : if (tabhaute[i-1].keep == false) {
                            document.getElementById("pahaute"+i).style.visibility = "hidden";
                        }
        break;
    case 1 : if (tabbasse[i-1].keep == false) {
                            document.getElementById("pabasse"+i).style.visibility = "hidden";
                        }
        break;
    }
}
function haute(){
	let i = 1;

	while (i < 7) {
		res=tahaute
		}
		i++;
	let x = test_nb_x(i) * i;
	}
}
function totall()
{
    let res = 0;
    var total = document.getElementById("total");
		let tth = document.getElementById("pahaute");
		let ttb = document.getElementById("pabasse");
		let tempo = 0;
    for(var i = 0; i<6; i++){
        if(pahaute[i].keep == true){
            res = res + pahaute[i].val;
			tth.innerHTML = res;
        }
    }
	tempo = res;

    for (i = 0; i < 7 ; i++) {
        if(pabasse[i].keep == true){
            res = res + pabasse[i].val;
			ttb.innerHTML = res - tempo;
        }
    }

    if(tempo >= 63 && test_total_haute == false){
		res = res + 35;
		test_total_haute = true;
	}
    total.innerHTML = res;
    return res;
}
