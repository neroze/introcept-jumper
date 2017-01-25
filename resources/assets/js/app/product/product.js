var J = require('../jumper/lib.js');
var Product = {};

Product.init = function(){
	this.get_Products();
}

Product.get_Products = function(){
	var self = this;
	this.$http.get('/products').then((resp)=>{
		if(resp.data){
			self.products = resp.data;	
		}

	},(error) => {
		J.log("eoorr"+ error);
	});
}

Product.save_product = function(){
	var self = this;
	self.product.total = parseInt(this.quantity) * parseInt(this.price);
	this.$http.post('/save_product', self.product ).then((resp)=>{
			
		console.log(resp.data);
		if(resp.data.stat){
			alert("Product Saved");
			self.products.push(resp.data.data);
			J.reset(self.product);
		}else{
			alert(resp.data.msg.join("<br>"));
		}

	},(error) => {
		J.log("eoorr"+ error);
	});
}

new J.Vue({
	el: '#app',
	data: {
		products:[],
		product:{
			name:null,
			price:null,
			quantity:null
		}
	},
	mounted: function() {
		// this.init();
	},
	methods: Product
});



    

