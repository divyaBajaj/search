
var mockJson=["orthopedic","dental","physiotherapy","general","hospital","albrecht","camel","camera"]
$("#search").keyup(function(event){
	var sortedlist=filterItems(event.target.value);
	var list =renderItems(sortedlist);
	$(".sortedlist")[0].innerHTML=""
	$(".sortedlist").append(list);

})
function filterItems(enteredValue){
	var tempArray=[];
	for( var i=0;i<mockJson.length;i++){
		if(enteredValue && mockJson[i].substring(0,enteredValue.length).toLowerCase().indexOf(enteredValue)>=0){
			tempArray.push(mockJson[i])
		}
	}
	return tempArray
}
function renderItems(sortedlist){
	if(sortedlist && sortedlist.length){
		return(
			sortedlist.map(function(item){
				return(
					// "hello"
					`<li>${item}</li>`
				)
			})
		)
	}
	return(
		
		`<li class="NoResultFound"/li>`
		
	)
}
$(".sortedlist").on("click","li",function(event){	
	$("#search").val(event.target.textContent)
	$(".sortedlist")[0].innerHTML="";
})
$(".searchBtn").on("click",function(){
	var value=$("#search").val();
	//attr.disable
	var redirectURL=$(".NoResultFound")&& $(".NoResultFound").length>0?"https://eaglewingshealthcare.in/":`${value}.html`;
	document.location.href=redirectURL;
	
})
