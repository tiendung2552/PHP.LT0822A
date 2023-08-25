// ---------------------------- hien thi sp ------------------------
const danhmucnu = document.querySelector(".danhmucnu")
const danhmucnam = document.querySelector(".danhmucnam")
const danhmuctreem = document.querySelector(".danhmuctreem")
if(danhmucnu){
	danhmucnu.addEventListener("click",function(){
		document.querySelector(".slider-product-one-conter-flex").style.display = "none"
		document.querySelector(".slider-product-one-conter-toom").style.display = "none"
		document.querySelector(".slider-product-one-conter").style.display = "block"
	})
}
if(danhmucnam){
	danhmucnam.addEventListener("click",function(){
		document.querySelector(".slider-product-one-conter").style.display = "none"
		document.querySelector(".slider-product-one-conter-toom").style.display = "none"
		document.querySelector(".slider-product-one-conter-flex").style.display = "block"
	})
}
if(danhmuctreem){
	danhmuctreem.addEventListener("click",function(){
		document.querySelector(".slider-product-one-conter").style.display = "none"
		document.querySelector(".slider-product-one-conter-flex").style.display = "none"
		document.querySelector(".slider-product-one-conter-toom").style.display = "block"
	})
}

//------------------------ slider-product-flex -------------------
const downright = document.querySelector('.down-right')
const  downleft = document.querySelector('.down-left')
const imgNuberone = document.querySelectorAll('.slider-product-one-conter-items-flex')
	// console.log(rightbtntwoflex)
	// console.log(leftbtn)
downright.addEventListener("click",function(){
	index = index+1
	if(index>imgNuberone.length-1){
		index=0
	}
	document.querySelector('.slider-product-one-conter-items-contes-flex').style.right = index *100+"%"
})
downleft.addEventListener("click", function(){
	index = index-1
	if(index<=0){
		index=imgNuberone.length-1
	}
	document.querySelector('.slider-product-one-conter-items-contes-flex').style.right = index *100+"%"
})

//------------------------ slider-product-toom -------------------
const righttoom = document.querySelector('.down-right-toom')
const  lefttoom = document.querySelector('.down-left-toom')
const imgNubertoom = document.querySelectorAll('.slider-product-one-conter-items-toom')
	// console.log(rightbtntwoflex)
	// console.log(leftbtn)
righttoom.addEventListener("click",function(){
	index = index+1
	if(index>imgNubertoom.length-1){
		index=0
	}
	document.querySelector('.slider-product-one-conter-items-contes-toom').style.right = index *100+"%"
})
lefttoom.addEventListener("click", function(){
	index = index-1
	if(index<=0){
		index=imgNubertoom.length-1
	}
	document.querySelector('.slider-product-one-conter-items-contes-toom').style.right = index *100+"%"
})