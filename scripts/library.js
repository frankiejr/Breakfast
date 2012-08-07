$(document).ready(function(){
// Alternative, at the very top of body tag: <script>document.body.className='js-on';</script>
	$('body').addClass('js-on');

	prj.function1('#element', '#trigger');

//  Boilerplate functions
//  prj.modTabs('#parent', '.tabItem');
//	prj.zebra('table', 'tr');
//	prj.randomizer('.element', '.item');
//	prj.inputClear('input');
});

var prjOpts = { // Object literal description ----------------------------------
	option1 : 500,       // Option 1 description
	option2 : true,      // Option 2 description
	option3 : 'idName',  // Option 3 description
	option4 : { // Nested object literal description ---------------------------
		subOption1: 'subValue1',  // Option 1 description
		subOption2: 'subValue2',  // Option 2 description
		subOption3: 'subValue3'   // Option 3 description
	}
}

var prj = {
	// function1 description
	function1 : function(el, trg) {
		var var1 = prjOpts.option1;
		var var2 = prjOpts.option4.subOption2;
		// innerFunction description
		function innerFunction(el) {
			// Comment liberally
		};
	}

// Boilerplate functions
//,

//	//  Create tabbed content from items within a container
//	modTabs : function(container, item) {
//		$(container).each(function() {
//			var obj = $(this);
//			var items = obj.children(item);
//			var activeItem = obj.find(item+'.active');
//			//  Create tabNav
//			var tabNav = obj.prepend('<ul class="tabNav" />').find('.tabNav');
//			for (var i=0; i < items.length; i++) {
//				var tabTitle = $(items[i]).find('.head:first').text();
//				$(items[i]).find('.head:first').hide();
//				if( $(items[i]).hasClass('active') == true ) {
//					tabNav.append('<li class="tab active"><a href="#">'+tabTitle+'</a></li>');
//				} else {
//					tabNav.append('<li class="tab"><a href="#">'+tabTitle+'</a></li>');
//				}
//			};
//			//  Show active tab only. If there is no active tab, make the first tab active
//			if( activeItem.length > 0) {
//				obj.children(item+':not(.active)').hide();
//			} else {
//				obj.children(item+':gt(0)').hide();
//				obj.children(item+':first').addClass('active');
//				tabNav.find('.tab:first').addClass('active');
//			}
//			//  Tab click
//			var tabs = tabNav.find('.tab');
//			tabs.bind('click', function(event) {
//				event.preventDefault();
//				tabs.removeClass('active');
//				$(this).addClass('active');
//				//  Get the location of the tab in the array
//				for (loc=0; loc < tabs.length; loc++) {
//					if (tabs[loc] == this ) {break;}
//				}
//				items.hide().removeClass('active');
//				obj.children(item+':eq('+loc+')').show().addClass('active');
////				//  Alternate fade animation
////				items.fadeOut(200).removeClass('active');
////				obj.children(item+':eq('+loc+')').delay(200).fadeIn(200).addClass('active');
//			});
//		});
//	},


//	// Add a class="odd" to odd-number children inside a parent container
//	zebra : function(container, item) {
//		$(container+' '+item+':nth-child(odd)').addClass('odd');
//	},


//	// Randomize an array of children
//	randomizer : function(container, item) {
//		$(container).each(function() {
//			var obj = $(this);
//			var items = $(this).find(item);
//			obj.empty();
//			var i = 0;
//			var random;
//			while ( i < items.length ) {
//				//  Generate a random number between 0 and (arraylength-1)
//				random = Math.floor(Math.random()*items.length);
//				//  If the element hasn't been "passed"
//				if ( items[random] != 'passed' ){
//					obj.append(items[random]);
//					//  Mark this item as "passed"
//					items[random]='passed';
//					i++
//				};
//			};
//		});
//	},

//	//	Clear inputs on focus
//	inputClear : function(target) {
//		var target = target || "input";
//		$(target).each(function() {
//			if( $(this).attr('type') == 'text' || $(this).attr('type') == 'password' || $(this).attr('type') == 'textarea' ) {
//				var value = $(this).val();
//				$(this).focus(function() {
//					if($(this).val() == value) {
//						$(this).val("");
//					}
//				});
//				$(this).blur(function() {
//					$(this).removeClass('focus');
//					if($(this).val() == "") {
//						$(this).val(value);
//					}
//				});
//			}
//		});
//	}

}