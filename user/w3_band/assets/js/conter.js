const header = document.querySelector("#headerr")
	window.addEventListener("scroll", function(){
		x = window.pageYOffset
		if (x>0){
			header.classList.add("sticky")
		}
		else {
			header.classList.remove("sticky")
		}
	})



	// chay slider anh lap ----
	const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
	const imgContainer = document.querySelector(".aspect-ratio-169")
	const dotItem = document.querySelectorAll(".dot")
	let imgNuber = imgPosition.length
	let index = 0
	// console.log(imgPosition)
	imgPosition.forEach(function(image,index){
		image.style.left = index*100 + "%"
		dotItem[index].addEventListener("click",function(){
			slider(index)
		})
	})
	function imgSlider (){
		index++;
		// console.log(index)
		if (index>=imgNuber) {index=0}
		slider (index)
	}
	function slider (index){
		imgContainer.style.left = "-" + index*100 + "%"
		const dotActive = document.querySelector(".active")
		dotActive.classList.remove("active")
		dotItem[index].classList.add("active")
	}

setInterval(imgSlider,5000)
//------------------------ slider product -------------------

const rightbtntwo = document.querySelector('.fas-fa-chevron-right-two')
const leftbtntwo = document.querySelector('.fas-fa-chevron-left-two')
const imgNubertwo = document.querySelectorAll('.slider-product-one-conter-items')
	// console.log(rightbtn)
	// console.log(leftbtn)
rightbtntwo.addEventListener("click",function(){
	index = index+1
	if(index>imgNubertwo.length-1){
		index=0
	}
	document.querySelector('.slider-product-one-conter-items-contes').style.right = index *100+"%"
})
leftbtntwo.addEventListener("click", function(){
	index = index-1
	if(index<=0){
		index=imgNubertwo.length-1
	}
	document.querySelector('.slider-product-one-conter-items-contes').style.right = index *100+"%"
})
