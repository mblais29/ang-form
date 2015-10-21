(function(){

	var app = angular.module('store',[]);

	app.controller('storeController', function(){
		this.products = apple;
	});
	
	app.controller('reviewController', function(){
		this.review = {};
		this.addReview = function(product){
			product.reviews.push(this.review);
			
			/* Clears out the review so the form resets */
			this.review = {};
		};
	});

	var apple = [

		{
			type: 'iPhone 4s',
			price: '$400',
			img: [{
				full: 'img/iphone/iphone-4s.png',
			}],
			reviews: [
					{
						stars: 3,
						body: 'Apps run slow, very durable.',
						author: 'mblais@brg.com'
					}
				
			]
		},
		{
			type: 'iPhone 5s',
			price: '$600',
			img: [{
				full: 'img/iphone/iphone-5s.png',
			}],
			reviews: [
				{
					stars: 4,
					body: 'Faster processor, better graphics and a larger screen makes it easier to use.',
					author: 'mblais29@gmail.com'
				}
			]
		},
		{
			type: 'iPhone 6s',
			price: '$800',
			img: [{
				full: 'img/iphone/iphone-6s.jpg',
			}],
			reviews: [
				{
					stars: 5,
					body: 'By far the best iphone yet. Apps run smoothly, 3D touch is incredible.',
					author: 'mblais29@gmail.com'
				}
				
			]
		},
		
	];







})();