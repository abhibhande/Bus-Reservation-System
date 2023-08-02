const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
}

);




function pick_up_point(ElementValue)
	  {
	     with(document.forms.booking)
		 {
		    if(ElementValue==1)
		    {
		        op1[0].text="Chatrapati Shivaji Maharaj Chowk"
				op1[0].value="Chatrapati Shivaji Maharaj Chowk"
				op1[1].text="Ashamegh hotel"
				op1[1].value="Ashamegh hotel"
				op1[2].text="Gandhhi Chowk"
				op1[2].value="Gandhhi Chowk"
				op1[3].text="1 no "
				op1[3].value="1 no "
				op1[4].text=" 5 no"
				op1[4].value=" 5 no"
				op1[5].text="12 no"
				op1[5].value="12 no"
		    }
			if(ElementValue==2)
		    {
		        op1[0].text="Hadapsar"
				op1[0].value="Hadapsar"
				op1[1].text=" Swargate"
				op1[1].value=" Swargate"
				op1[2].text="Shivajinagar"
				op1[2].value="Shivajinagar"
				op1[3].text="Indapur"
				op1[3].value="Indapur"
				op1[4].text="Dound"
				op1[4].value="Dound"
				op1[5].text="Katraj"
				op1[5].value="Katraj"
		    }	 
		 }
	  } 
	  function drop_point(ElementValue)
	  {
	     with(document.forms.booking)
		 {
		    if(ElementValue==1)
		    {
		        op3[0].text="Chatrapati Shivaji Maharaj Chowk"
				op3[0].value="Chatrapati Shivaji Maharaj Chowk"
				op3[1].text="Ashamegh hotel"
				op3[1].value="Ashamegh hotel"
				op3[2].text="Gandhhi Chowk"
				op3[2].value="Gandhhi Chowk"
				op3[3].text="1 no "
				op3[3].value="1 no "
				op3[4].text=" 5 no"
				op3[4].value=" 5 no"
				op3[5].text="12 no"
				op3[5].value="12 no"
		    }
			if(ElementValue==2)
		    {
		        op3[0].text="Hadapsar"
				op3[0].value="Hadapsar"
				op3[1].text=" Swargate"
				op3[1].value=" Swargate"
				op3[2].text="Shivajinagar"
				op3[2].value="Shivajinagar"
				op3[3].text="Indapur"
				op3[3].value="Indapur"
				op3[4].text="Dound"
				op3[4].value="Dound"
				op3[5].text="Katraj"
				op3[5].value="Katraj"
		    }	 
		 }
	  } 
	  
