<?
	function TopSlider_Init()
	{
		global $top_slider;
		$top_slider = GetTopSliderList();
	}

	function GetTopSliderList()
	{
		$items = Array();
		$args = Array(
		    'post_type'=>'top_slider',
            'orderby'=>'date'
        );
		$query = new WP_Query($args);
		while($query->have_posts())
		{
			$query->the_post();
			$title = get_the_title();
			$id = get_the_ID();
			$url = get_the_permalink();
			$items[$id] = Array(
				'id'=>$id, 
				'title'=>$title,
				'url'=>$url,
				'img_big' => wp_get_attachment_image_src( get_post_thumbnail_id(), 'top_slider-big'),
			);
		}
		wp_reset_postdata();
		return $items;
	}
	add_action('init','TopSlider_Init');

?>