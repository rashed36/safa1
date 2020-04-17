<?php
	Route::get('/dashboard', function () {return view('admin.dashboard'); });
//..............................Social link Route................................
		Route::get('all_social_link', 'Admin\social_linkController@index')->name('admin.all_social_link');
		Route::get('social_link', 'Admin\social_linkController@links')->name('admin.social_link');
		Route::post('save_social_link', 'Admin\social_linkController@save_social_link')->name('admin.save_social_link');
		Route::get('/{id}/unactive_social_link', 'Admin\social_linkController@unactive_social_link')->name('admin.unactive_social_link');
		Route::get('/{id}/active_social_link', 'Admin\social_linkController@active_social_link')->name('admin.active_social_link');
		Route::get('/{id}/edit_social_link', 'Admin\social_linkController@edit_social_link')->name('admin.edit_social_link');
		Route::post('/{id}/update_social_link', 'Admin\social_linkController@update_social_link')->name('admin.update_social_link');
		Route::get('/{id}/delete_social_link', 'Admin\social_linkController@delete_social_link')->name('admin.delete_social_link');
		//.........................End Social link Route....................................
		//..............................Contact Route................................
		Route::get('all_contact', 'Admin\contactController@index')->name('admin.all_contact');
		Route::get('add_contact', 'Admin\contactController@add_contact')->name('admin.add_contact');
		Route::post('save_contact', 'Admin\contactController@save_contact')->name('admin.save_contact');
		Route::get('/{id}/unactive_contact', 'Admin\contactController@unactive_contact')->name('admin.unactive_contact');
		Route::get('/{id}/active_contact', 'Admin\contactController@active_contact')->name('admin.active_contact');
		Route::get('/{id}/edit_contact', 'Admin\contactController@edit_contact')->name('admin.edit_contact');
		Route::post('/{id}/update_contact', 'Admin\contactController@update_contact')->name('admin.update_contact');
		Route::get('/{id}/delete_contact', 'Admin\contactController@delete_contact')->name('admin.delete_contact');
		//.........................End Contact Route....................................
		//..............................Counter Section Route................................
		Route::get('all_counter', 'Admin\counterController@index')->name('admin.all_counter');
		Route::get('add_counter', 'Admin\counterController@add_counter')->name('admin.add_counter');
		Route::post('save_counter', 'Admin\counterController@save_counter')->name('admin.save_counter');
		Route::get('/{id}/unactive_counter', 'Admin\counterController@unactive_counter')->name('admin.unactive_counter');
		Route::get('/{id}/active_counter', 'Admin\counterController@active_counter')->name('admin.active_counter');
		Route::get('/{id}/edit_counter', 'Admin\counterController@edit_counter')->name('admin.edit_counter');
		Route::post('/{id}/update_counter', 'Admin\counterController@update_counter')->name('admin.update_counter');
		Route::get('/{id}/delete_counter', 'Admin\counterController@delete_counter')->name('admin.delete_counter');
		//.........................End Counter Section Route....................................
		//..............................Catagery Section Route................................
		Route::get('all_category', 'Admin\categoryController@index')->name('admin.all_category');
		Route::get('add_category', 'Admin\categoryController@add_category')->name('admin.add_category');
		Route::post('save_category', 'Admin\categoryController@save_category')->name('admin.save_category');
		Route::get('/{catagery_id}/unactive_category', 'Admin\categoryController@unactive_category')->name('admin.unactive_category');
		Route::get('/{catagery_id}/active_category', 'Admin\categoryController@active_category')->name('admin.active_category');
		Route::get('/{catagery_id}/edit_category', 'Admin\categoryController@edit_category')->name('admin.edit_category');
		Route::post('/{catagery_id}/update_category', 'Admin\categoryController@update_category')->name('admin.update_category');
		Route::get('/{catagery_id}/delete_category', 'Admin\categoryController@delete_category')->name('admin.delete_category');
		//..............................End Catagery Section Route................................
		//..............................Counter Section Route................................
		Route::get('all_reason', 'Admin\reasonController@index')->name('admin.all_reason');
		Route::get('add_reason', 'Admin\reasonController@add_reason')->name('admin.add_reason');
		Route::post('save_reason', 'Admin\reasonController@save_reason')->name('admin.save_reason');
		Route::get('/{id}/unactive_reason', 'Admin\reasonController@unactive_reason')->name('admin.unactive_reason');
		Route::get('/{id}/active_reason', 'Admin\reasonController@active_reason')->name('admin.active_reason');
		Route::get('/{id}/edit_reason', 'Admin\reasonController@edit_reason')->name('admin.edit_reason');
		Route::post('/{id}/update_reason', 'Admin\reasonController@update_reason')->name('admin.update_reason');
		Route::get('/{id}/delete_reason', 'Admin\reasonController@delete_reason')->name('admin.delete_reason');
		//.........................End Counter Section Route....................................
		//..............................Slider Section Route................................
		Route::get('all_slider', 'Admin\sliderController@index')->name('admin.all_slider');
		Route::get('add_slider', 'Admin\sliderController@add_slider')->name('admin.add_slider');
		Route::post('save_slider', 'Admin\sliderController@save_slider')->name('admin.save_slider');
		Route::get('/{id}/unactive_slider', 'Admin\sliderController@unactive_slider')->name('admin.unactive_slider');
		Route::get('/{id}/active_slider', 'Admin\sliderController@active_slider')->name('admin.active_slider');
		Route::get('/{id}/edit_slider', 'Admin\sliderController@edit_slider')->name('admin.edit_slider');
		Route::post('/{id}/update_slider', 'Admin\sliderController@update_slider')->name('admin.update_slider');
		Route::get('/{id}/delete_slider', 'Admin\sliderController@delete_slider')->name('admin.delete_slider');
		//.........................End Slider Section Route....................................
		//..............................Slider Section Route................................
		Route::get('all_about', 'Admin\aboutController@index')->name('admin.all_about');
		Route::get('add_about', 'Admin\aboutController@add_about')->name('admin.add_about');
		Route::post('save_about', 'Admin\aboutController@save_about')->name('admin.save_about');
		Route::get('/{id}/unactive_about', 'Admin\aboutController@unactive_about')->name('admin.unactive_about');
		Route::get('/{id}/active_about', 'Admin\aboutController@active_about')->name('admin.active_about');
		Route::get('/{id}/edit_about', 'Admin\aboutController@edit_about')->name('admin.edit_about');
		Route::post('/{id}/update_about', 'Admin\aboutController@update_about')->name('admin.update_about');
		Route::get('/{id}/delete_about', 'Admin\aboutController@delete_about')->name('admin.delete_about');
		//.........................End Slider Section Route....................................
		//..............................Logo&Favicon Section Route................................
		Route::get('all_logo', 'Admin\logoController@index')->name('admin.all_logo');
		Route::get('add_logo', 'Admin\logoController@add_logo')->name('admin.add_logo');
		Route::post('save_logo', 'Admin\logoController@save_logo')->name('admin.save_logo');
		Route::get('/{id}/unactive_logo', 'Admin\logoController@unactive_logo')->name('admin.unactive_logo');
		Route::get('/{id}/active_logo', 'Admin\logoController@active_logo')->name('admin.active_logo');
		Route::get('/{id}/edit_logo', 'Admin\logoController@edit_logo')->name('admin.edit_logo');
		Route::post('/{id}/update_logo', 'Admin\logoController@update_logo')->name('admin.update_logo');
		Route::get('/{id}/delete_logo', 'Admin\logoController@delete_logo')->name('admin.delete_logo');
		//.........................End Logo&Favicon Section Route....................................
		//==============================Organic Cotton Grey Fabric Section Route======================
		// Route::get('all_organic', 'Admin\organicController@index')->name('admin.all_organic');
		//................Product Description.....................
		Route::get('all_Pdescription_organic', 'Admin\organicController@all_Pdescription_organic')->name('admin.all_Pdescription_organic');
		Route::get('Pdescription_organic', 'Admin\organicController@Pdescription_organic')->name('admin.Pdescription_organic');
		Route::post('save_Pdescription_organic', 'Admin\organicController@save_Pdescription_organic')->name('admin.save_Pdescription_organic');
		Route::get('/{id}/unactive_Pdescription_organic', 'Admin\organicController@unactive_Pdescription_organic')->name('admin.unactive_Pdescription_organic');
		Route::get('/{id}/active_Pdescription_organic', 'Admin\organicController@active_Pdescription_organic')->name('admin.active_Pdescription_organic');
		Route::get('/{id}/edit_Pdescription_organic', 'Admin\organicController@edit_Pdescription_organic')->name('admin.edit_Pdescription_organic');
		Route::post('/{id}/update_Pdescription_organic', 'Admin\organicController@update_Pdescription_organic')->name('admin.update_Pdescription_organic');
		Route::get('/{id}/delete_Pdescription_organic', 'Admin\organicController@delete_Pdescription_organic')->name('admin.delete_Pdescription_organic');
		//.................Product Image.......................
		Route::get('all_Pimage_organic', 'Admin\organicController@all_Pimage_organic')->name('admin.all_Pimage_organic');
		Route::get('Pimage_organic', 'Admin\organicController@Pimage_organic')->name('admin.Pimage_organic');
		Route::post('save_Pimage_organic', 'Admin\organicController@save_Pimage_organic')->name('admin.save_Pimage_organic');
		Route::get('/{id}/unactive_Pimage_organic', 'Admin\organicController@unactive_Pimage_organic')->name('admin.unactive_Pimage_organic');
		Route::get('/{id}/active_Pimage_organic', 'Admin\organicController@active_Pimage_organic')->name('admin.active_Pimage_organic');
		Route::get('/{id}/edit_Pimage_organic', 'Admin\organicController@edit_Pimage_organic')->name('admin.edit_Pimage_organic');
		Route::post('/{id}/update_Pimage_organic', 'Admin\organicController@update_Pimage_organic')->name('admin.update_Pimage_organic');
		Route::get('/{id}/delete_Pimage_organic', 'Admin\organicController@delete_Pimage_organic')->name('admin.delete_Pimage_organic');
		//.....................Specification.................
		Route::get('all_Specification_organic', 'Admin\organicController@all_Specification_organic')->name('admin.all_Specification_organic');
		Route::get('Specification_organic', 'Admin\organicController@Specification_organic')->name('admin.Specification_organic');
		Route::post('save_Specification_organic', 'Admin\organicController@save_Specification_organic')->name('admin.save_Specification_organic');
		Route::get('/{id}/unactive_Specification_organic', 'Admin\organicController@unactive_Specification_organic')->name('admin.unactive_Specification_organic');
		Route::get('/{id}/active_Specification_organic', 'Admin\organicController@active_Specification_organic')->name('admin.active_Specification_organic');
		Route::get('/{id}/edit_Specification_organic', 'Admin\organicController@edit_Specification_organic')->name('admin.edit_Specification_organic');
		Route::post('/{id}/update_Specification_organic', 'Admin\organicController@update_Specification_organic')->name('admin.update_Specification_organic');
		Route::get('/{id}/delete_Specification_organic', 'Admin\organicController@delete_Specification_organic')->name('admin.delete_Specification_organic');
		//.....................Parameters of this product.................
		Route::get('all_Parmeters_organic', 'Admin\organicController@all_Parmeters_organic')->name('admin.all_Parmeters_organic');
		Route::get('Parmeters_organic', 'Admin\organicController@Parmeters_organic')->name('admin.Parmeters_organic');
		Route::post('save_Parmeters_organic', 'Admin\organicController@save_Parmeters_organic')->name('admin.save_Parmeters_organic');
		Route::get('/{id}/unactive_Parmeters_organic', 'Admin\organicController@unactive_Parmeters_organic')->name('admin.unactive_Parmeters_organic');
		Route::get('/{id}/active_Parmeters_organic', 'Admin\organicController@active_Parmeters_organic')->name('admin.active_Parmeters_organic');
		Route::get('/{id}/edit_Parmeters_organic', 'Admin\organicController@edit_Parmeters_organic')->name('admin.edit_Parmeters_organic');
		Route::post('/{id}/update_Parmeters_organic', 'Admin\organicController@update_Parmeters_organic')->name('admin.update_Parmeters_organic');
		Route::get('/{id}/delete_Parmeters_organic', 'Admin\organicController@delete_Parmeters_organic')->name('admin.delete_Parmeters_organic');
		//....................Advantages................
		Route::get('all_Advantages_organic', 'Admin\organicController@all_Advantages_organic')->name('admin.all_Advantages_organic');
		Route::get('Advantages_organic', 'Admin\organicController@Advantages_organic')->name('admin.Advantages_organic');
		Route::post('save_Advantages', 'Admin\organicController@save_Advantages')->name('admin.save_Advantages');
		Route::get('/{id}/unactive_Advantages', 'Admin\organicController@unactive_Advantages')->name('admin.unactive_Advantages');
		Route::get('/{id}/active_Advantages', 'Admin\organicController@active_Advantages')->name('admin.active_Advantages');
		Route::get('/{id}/edit_Advantages', 'Admin\organicController@edit_Advantages')->name('admin.edit_Advantages');
		Route::post('/{id}/update_Advantages', 'Admin\organicController@update_Advantages')->name('admin.update_Advantages');
		Route::get('/{id}/delete_Advantages', 'Admin\organicController@delete_Advantages')->name('admin.delete_Advantages');
		//....................FAQ................
		Route::get('all_FAQ_organic', 'Admin\organicController@all_FAQ_organic')->name('admin.all_FAQ_organic');
		Route::get('FAQ_organic', 'Admin\organicController@FAQ_organic')->name('admin.FAQ_organic');
		Route::post('save_FAQ_organic', 'Admin\organicController@save_FAQ_organic')->name('admin.save_FAQ_organic');
		Route::get('/{id}/unactive_FAQ_organic', 'Admin\organicController@unactive_FAQ_organic')->name('admin.unactive_FAQ_organic');
		Route::get('/{id}/active_FAQ_organic', 'Admin\organicController@active_FAQ_organic')->name('admin.active_FAQ_organic');
		Route::get('/{id}/edit_FAQ_organic', 'Admin\organicController@edit_FAQ_organic')->name('admin.edit_FAQ_organic');
		Route::post('/{id}/update_FAQ_organic', 'Admin\organicController@update_FAQ_organic')->name('admin.update_FAQ_organic');
		Route::get('/{id}/delete_FAQ_organic', 'Admin\organicController@delete_FAQ_organic')->name('admin.delete_FAQ_organic');
		//.........................End Organic Cotton Grey Fabric Route....................................
		//================================Paper Cons Route Start============================
		// Route::get('all_paperCons', 'Admin\PaperConsController@index')->name('admin.all_paperCons');
		// .................... Product Description Route...................
		Route::get('all_PDescribe_paperCons', 'Admin\PaperConsController@all_PDescribe_paperCons')->name('admin.all_PDescribe_paperCons');
		Route::get('PDescribe_paperCons', 'Admin\PaperConsController@PDescribe_paperCons')->name('admin.PDescribe_paperCons');
		Route::post('save_PDescribe_paperCons', 'Admin\PaperConsController@save_PDescribe_paperCons')->name('admin.save_PDescribe_paperCons');
		Route::get('/{id}/unactive_PDescribe_paperCons', 'Admin\PaperConsController@unactive_PDescribe_paperCons')->name('admin.unactive_PDescribe_paperCons');
		Route::get('/{id}/active_PDescribe_paperCons', 'Admin\PaperConsController@active_PDescribe_paperCons')->name('admin.active_PDescribe_paperCons');
		Route::get('/{id}/edit_PDescribe_paperCons', 'Admin\PaperConsController@edit_PDescribe_paperCons')->name('admin.edit_PDescribe_paperCons');
		Route::post('/{id}/update_PDescribe_paperCons', 'Admin\PaperConsController@update_PDescribe_paperCons')->name('admin.update_PDescribe_paperCons');
		Route::get('/{id}/delete_PDescribe_paperCons', 'Admin\PaperConsController@delete_PDescribe_paperCons')->name('admin.delete_PDescribe_paperCons');
		// .................... Product Image Route...................
		Route::get('all_Pimage_paperCons', 'Admin\PaperConsController@all_Pimage_paperCons')->name('admin.all_Pimage_paperCons');
		Route::get('Pimage_paperCons', 'Admin\PaperConsController@Pimage_paperCons')->name('admin.Pimage_paperCons');
		Route::post('save_Pimage_paperCons', 'Admin\PaperConsController@save_Pimage_paperCons')->name('admin.save_Pimage_paperCons');
		Route::get('/{id}/unactive_Pimage_paperCons', 'Admin\PaperConsController@unactive_Pimage_paperCons')->name('admin.unactive_Pimage_paperCons');
		Route::get('/{id}/active_Pimage_paperCons', 'Admin\PaperConsController@active_Pimage_paperCons')->name('admin.active_Pimage_paperCons');
		Route::get('/{id}/edit_Pimage_paperCons', 'Admin\PaperConsController@edit_Pimage_paperCons')->name('admin.edit_Pimage_paperCons');
		Route::post('/{id}/update_Pimage_paperCons', 'Admin\PaperConsController@update_Pimage_paperCons')->name('admin.update_Pimage_paperCons');
		Route::get('/{id}/delete_Pimage_paperCons', 'Admin\PaperConsController@delete_Pimage_paperCons')->name('admin.delete_Pimage_paperCons');
		// .................... Product Features Route...................
		Route::get('all_Features_paperCons', 'Admin\PaperConsController@all_Features_paperCons')->name('admin.all_Features_paperCons');
		Route::get('Features_paperCons', 'Admin\PaperConsController@Features_paperCons')->name('admin.Features_paperCons');
		Route::post('save_Features_paperCons', 'Admin\PaperConsController@save_Features_paperCons')->name('admin.save_Features_paperCons');
		Route::get('/{id}/unactive_Features_paperCons', 'Admin\PaperConsController@unactive_Features_paperCons')->name('admin.unactive_Features_paperCons');
		Route::get('/{id}/active_Features_paperCons', 'Admin\PaperConsController@active_Features_paperCons')->name('admin.active_Features_paperCons');
		Route::get('/{id}/edit_Features_paperCons', 'Admin\PaperConsController@edit_Features_paperCons')->name('admin.edit_Features_paperCons');
		Route::post('/{id}/update_Features_paperCons', 'Admin\PaperConsController@update_Features_paperCons')->name('admin.update_Features_paperCons');
		Route::get('/{id}/delete_Features_paperCons', 'Admin\PaperConsController@delete_Features_paperCons')->name('admin.delete_Features_paperCons');
		// .................... Specification Route...................
		Route::get('all_Specification_paperCons', 'Admin\PaperConsController@all_Specification_paperCons')->name('admin.all_Specification_paperCons');
		Route::get('Specification_paperCons', 'Admin\PaperConsController@Specification_paperCons')->name('admin.Specification_paperCons');
		Route::post('save_Specification_paperCons', 'Admin\PaperConsController@save_Specification_paperCons')->name('admin.save_Specification_paperCons');
		Route::get('/{id}/unactive_Specification_paperCons', 'Admin\PaperConsController@unactive_Specification_paperCons')->name('admin.unactive_Specification_paperCons');
		Route::get('/{id}/active_Specification_paperCons', 'Admin\PaperConsController@active_Specification_paperCons')->name('admin.active_Specification_paperCons');
		Route::get('/{id}/edit_Specification_paperCons', 'Admin\PaperConsController@edit_Specification_paperCons')->name('admin.edit_Specification_paperCons');
		Route::post('/{id}/update_Specification_paperCons', 'Admin\PaperConsController@update_Specification_paperCons')->name('admin.update_Specification_paperCons');
		Route::get('/{id}/delete_Specification_paperCons', 'Admin\PaperConsController@delete_Specification_paperCons')->name('admin.delete_Specification_paperCons');
		// ................... Product Applications Route...................
		Route::get('all_Applications_paperCons', 'Admin\PaperConsController@all_Applications_paperCons')->name('admin.all_Applications_paperCons');
		Route::get('Applications_paperCons', 'Admin\PaperConsController@Applications_paperCons')->name('admin.Applications_paperCons');
		Route::post('save_Applications_paperCons', 'Admin\PaperConsController@save_Applications_paperCons')->name('admin.save_Applications_paperCons');
		Route::get('/{id}/unactive_Applications_paperCons', 'Admin\PaperConsController@unactive_Applications_paperCons')->name('admin.unactive_Applications_paperCons');
		Route::get('/{id}/active_Applications_paperCons', 'Admin\PaperConsController@active_Applications_paperCons')->name('admin.active_Applications_paperCons');
		Route::get('/{id}/edit_Applications_paperCons', 'Admin\PaperConsController@edit_Applications_paperCons')->name('admin.edit_Applications_paperCons');
		Route::post('/{id}/update_Applications_paperCons', 'Admin\PaperConsController@update_Applications_paperCons')->name('admin.update_Applications_paperCons');
		Route::get('/{id}/delete_Applications_paperCons', 'Admin\PaperConsController@delete_Applications_paperCons')->name('admin.delete_Applications_paperCons');
		// .................... Product Overview Route...................
		Route::get('all_POverview_paperCons', 'Admin\PaperConsController@all_POverview_paperCons')->name('admin.all_POverview_paperCons');
		Route::get('POverview_paperCons', 'Admin\PaperConsController@POverview_paperCons')->name('admin.POverview_paperCons');
		Route::post('save_POverview_paperCons', 'Admin\PaperConsController@save_POverview_paperCons')->name('admin.save_POverview_paperCons');
		Route::get('/{id}/unactive_POverview_paperCons', 'Admin\PaperConsController@unactive_POverview_paperCons')->name('admin.unactive_POverview_paperCons');
		Route::get('/{id}/active_POverview_paperCons', 'Admin\PaperConsController@active_POverview_paperCons')->name('admin.active_POverview_paperCons');
		Route::get('/{id}/edit_POverview_paperCons', 'Admin\PaperConsController@edit_POverview_paperCons')->name('admin.edit_POverview_paperCons');
		Route::post('/{id}/update_POverview_paperCons', 'Admin\PaperConsController@update_POverview_paperCons')->name('admin.update_POverview_paperCons');
		Route::get('/{id}/delete_POverview_paperCons', 'Admin\PaperConsController@delete_POverview_paperCons')->name('admin.delete_POverview_paperCons');
		// .................... Overview Description Route...................
		Route::get('all_Orvdescribe_paperCons', 'Admin\PaperConsController@all_Orvdescribe_paperCons')->name('admin.all_Orvdescribe_paperCons');
		Route::get('Orvdescribe_paperCons', 'Admin\PaperConsController@Orvdescribe_paperCons')->name('admin.Orvdescribe_paperCons');
		Route::post('save_Orvdescribe_paperCons', 'Admin\PaperConsController@save_Orvdescribe_paperCons')->name('admin.save_Orvdescribe_paperCons');
		Route::get('/{id}/unactive_Orvdescribe_paperCons', 'Admin\PaperConsController@unactive_Orvdescribe_paperCons')->name('admin.unactive_Orvdescribe_paperCons');
		Route::get('/{id}/active_Orvdescribe_paperCons', 'Admin\PaperConsController@active_Orvdescribe_paperCons')->name('admin.active_Orvdescribe_paperCons');
		Route::get('/{id}/edit_Orvdescribe_paperCons', 'Admin\PaperConsController@edit_Orvdescribe_paperCons')->name('admin.edit_Orvdescribe_paperCons');
		Route::post('/{id}/update_Orvdescribe_paperCons', 'Admin\PaperConsController@update_Orvdescribe_paperCons')->name('admin.update_Orvdescribe_paperCons');
		Route::get('/{id}/delete_Orvdescribe_paperCons', 'Admin\PaperConsController@delete_Orvdescribe_paperCons')->name('admin.delete_Orvdescribe_paperCons');
		//............pattern cons...........
		Route::get('all_Pattern_paperCons', 'Admin\PaperConsController@all_Pattern_paperCons')->name('admin.all_Pattern_paperCons');
		Route::get('pattern_paperCons', 'Admin\PaperConsController@pattern_paperCons')->name('admin.pattern_paperCons');
		Route::post('save_pattern_paperCons', 'Admin\PaperConsController@save_pattern_paperCons')->name('admin.save_pattern_paperCons');
		Route::get('/{id}/unactive_pattern_paperCons', 'Admin\PaperConsController@unactive_pattern_paperCons')->name('admin.unactive_pattern_paperCons');
		Route::get('/{id}/active_pattern_paperCons', 'Admin\PaperConsController@active_pattern_paperCons')->name('admin.active_pattern_paperCons');
		Route::get('/{id}/edit_pattern_paperCons', 'Admin\PaperConsController@edit_pattern_paperCons')->name('admin.edit_pattern_paperCons');
		Route::post('/{id}/update_pattern_paperCons', 'Admin\PaperConsController@update_pattern_paperCons')->name('admin.update_pattern_paperCons');
		Route::get('/{id}/delete_pattern_paperCons', 'Admin\PaperConsController@delete_pattern_paperCons')->name('admin.delete_pattern_paperCons');
		//===============================End Paper Cons Route===================================
		//=================================Briquette Section Route=============================
		// .........................Product image.....................
		Route::get('img_briquette_all', 'Admin\briquetteController@img_briquette_all')->name('admin.img_briquette_all');
		Route::get('img_briquette', 'Admin\briquetteController@img_briquette')->name('admin.img_briquette');
		Route::post('save_briquetteImage', 'Admin\briquetteController@save_briquetteImage')->name('admin.save_briquetteImage');
		Route::get('/{id}/unactive_briquette_pimage', 'Admin\briquetteController@unactive_briquette_pimage')->name('admin.unactive_briquette_pimage');
		Route::get('/{id}/active_briquette_pimage', 'Admin\briquetteController@active_briquette_pimage')->name('admin.active_briquette_pimage');
		Route::get('/{id}/edit_briquette_pimage', 'Admin\briquetteController@edit_briquette_pimage')->name('admin.edit_briquette_pimage');
		Route::post('/{id}/update_briquette_pimage', 'Admin\briquetteController@update_briquette_pimage')->name('admin.update_briquette_pimage');
		Route::get('/{id}/delete_briquette_pimage', 'Admin\briquetteController@delete_briquette_pimage')->name('admin.delete_briquette_pimage');
		// .....................Briquette Comparison with other fuelsRoute...................
		Route::get('comparison_briquette_all', 'Admin\briquetteController@comparison_briquette_all')->name('admin.comparison_briquette_all');
		Route::get('comparison_briquette', 'Admin\briquetteController@comparison_briquette')->name('admin.comparison_briquette');
		Route::post('save_briquettecomparison', 'Admin\briquetteController@save_briquettecomparison')->name('admin.save_briquettecomparison');
		Route::get('/{id}/unactive_briquette_comparison', 'Admin\briquetteController@unactive_briquette_comparison')->name('admin.unactive_briquette_comparison');
		Route::get('/{id}/active_briquette_comparison', 'Admin\briquetteController@active_briquette_comparison')->name('admin.active_briquette_comparison');
		Route::get('/{id}/edit_briquette_comparison', 'Admin\briquetteController@edit_briquette_comparison')->name('admin.edit_briquette_comparison');
		Route::post('/{id}/update_briquette_comparison', 'Admin\briquetteController@update_briquette_comparison')->name('admin.update_briquette_comparison');
		// .......................Industries and Possible Applications................
		Route::get('/{id}/delete_briquette_comparison', 'Admin\briquetteController@delete_briquette_comparison')->name('admin.delete_briquette_comparison');
		Route::get('Industries_briquette_all', 'Admin\briquetteController@Industries_briquette_all')->name('admin.Industries_briquette_all');
		Route::get('Industries_briquette', 'Admin\briquetteController@Industries_briquette')->name('admin.Industries_briquette');
		Route::post('save_ipossible', 'Admin\briquetteController@save_ipossible')->name('admin.save_ipossible');
		Route::get('/{id}/unactive_ipossible', 'Admin\briquetteController@unactive_ipossible')->name('admin.unactive_ipossible');
		Route::get('/{id}/active_ipossible', 'Admin\briquetteController@active_ipossible')->name('admin.active_ipossible');
		Route::get('/{id}/edit_ipossible', 'Admin\briquetteController@edit_ipossible')->name('admin.edit_ipossible');
		Route::post('/{id}/update_ipossible', 'Admin\briquetteController@update_ipossible')->name('admin.update_ipossible');
		Route::get('/{id}/delete_ipossible', 'Admin\briquetteController@delete_ipossible')->name('admin.delete_ipossible');
		//=============================End Briquette Route=====================================
		//==========================Pet Flakes Section Route Start=====================================
		//...........................Product image.......................................
		Route::get('all_petImage', 'Admin\petflakesController@all_petImage')->name('admin.all_petImage');
		Route::get('add_petImage', 'Admin\petflakesController@add_petImage')->name('admin.add_petImage');
		Route::post('save_petImage', 'Admin\petflakesController@save_petImage')->name('admin.save_petImage');
		Route::get('/{id}/unactive_pet_pimage', 'Admin\petflakesController@unactive_pet_pimage')->name('admin.unactive_pet_pimage');
		Route::get('/{id}/active_pet_pimage', 'Admin\petflakesController@active_pet_pimage')->name('admin.active_pet_pimage');
		Route::get('/{id}/edit_pet_pimage', 'Admin\petflakesController@edit_pet_pimage')->name('admin.edit_pet_pimage');
		Route::post('/{id}/update_pet_pimage', 'Admin\petflakesController@update_pet_pimage')->name('admin.update_pet_pimage');
		Route::get('/{id}/delete_pet_pimage', 'Admin\petflakesController@delete_pet_pimage')->name('admin.delete_pet_pimage');
		// ........................Specification....................
		Route::get('all_petspecifaction', 'Admin\petflakesController@all_petspecifaction')->name('admin.all_petspecifaction');
		Route::get('add_petspecifaction', 'Admin\petflakesController@add_petspecifaction')->name('admin.add_petspecifaction');
		Route::post('save_specification', 'Admin\petflakesController@save_specification')->name('admin.save_specification');
		Route::get('/{id}/unactive_petspecifaction', 'Admin\petflakesController@unactive_petspecifaction')->name('admin.unactive_petspecifaction');
		Route::get('/{id}/active_petspecifaction', 'Admin\petflakesController@active_petspecifaction')->name('admin.active_petspecifaction');
		Route::get('/{id}/edit_petspecifaction', 'Admin\petflakesController@edit_petspecifaction')->name('admin.edit_petspecifaction');
		Route::post('/{id}/update_specification', 'Admin\petflakesController@update_specification')->name('admin.update_specification');
		Route::get('/{id}/delete_petspecifaction', 'Admin\petflakesController@delete_petspecifaction')->name('admin.delete_petspecifaction');
		//=======================================End Pet Flakes Route================================