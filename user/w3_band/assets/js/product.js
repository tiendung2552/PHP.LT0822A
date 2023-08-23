const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg = document.querySelectorAll(".product-content-left-small-img img")
smalImg.forEach(function(imgItem,X){
	imgItem.addEventListener("click",function(){
		bigImg.src = imgItem.src
	})
})

// ------------------------- ẩn chữ -------------------

const gioithieu = document.querySelector(".gioithieu")
const chitiet = document.querySelector(".chitiet")
const baoquan = document.querySelector(".baoquan")
if(gioithieu){
	gioithieu.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block"
	})
}
if(chitiet){
	chitiet.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
	})
}
if(baoquan){
	baoquan.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
	})
}
const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon){
	butTon.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
	})

	$('input.input-qty').each(function() {
		var $this = $(this),
		  qty = $this.parent().find('.is-form'),
		  min = Number($this.attr('min')),
		  max = Number($this.attr('max'))
		if (min == 0) {
		  var d = 0
		} else d = min
		$(qty).on('click', function() {
		  if ($(this).hasClass('minus')) {
			if (d > min) d += -1
		  } else if ($(this).hasClass('plus')) {
			var x = Number($this.val()) + 1
			if (x <= max) d += 1
		  }
		  $this.attr('value', d).val(d)
		})
	  })	
}