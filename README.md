GW Accorian Cat
===============

<h2>Description</h2>

<p>
	This Wordpress plugin allows a user to create an accordion display of categories and posts using a short tag on their page or post.
</p>

<h2>Setup</h2>

<p>
	create a posts category that will be used as the parent for all categories in the display. It there is a different accordion for different pages, you will want to create a separate categories for each page.
</p>
<p>
	Place subcategories under the created parent. These will be the different accordion sections
</p>
<p>
	Attach posts to the proper categories in the accordions.
</p>

<h2>Short Tag</h2>

<p>
	<code>[accordioncat cat="parent_category"]</code>
</p>

<h2>Required Parameters</h2>

<p>
	<strong>cat</strong> - contains the slug for the parent category
</p>

<h2>Optional Parameters</h2>

<p>
	<strong>startingcat</strong> - the slug of the category that will start up open on the first load. The default is all closed.
</p>
<p>
	<strong>sortorder</strong> - this can be any of the following category fields:  'id', 'name', 'slug', 'count', 'term_group'. Default is 'slug' .
</p>
<p>
	<strong>order</strong> - 'asc' for acceding order or 'desc' for descending order. Default is 'asc'.
</p>
<p>
	<strong>hideposttitle</strong> - Hides the post title. Valid values are 'yes' and 'no'. Default is 'no'.
</p>
<p>
	<strong>debug</strong> - if set to "true" will dump the entire accordion data structure. to the page (all category and post object elements)
</p>

<h2>Examples</h2>

<p>
	To create an accordion with a parent category of 'mystuff' that starts with the sub-category 'openingcat' open, use:
</p>
<p>
	<code>[accordioncat cat="parent_category" startingcat="openingcat"]</code>
</p>
<p>
	To create an accordion with a parent category of 'mystuff' that starts with the sub-category 'openingcat' open and is sorted by name, use:
</p>
<p>
	<code>[accordioncat cat="parent_category" startingcat="openingcat" sortorder="name"]</code>
</p>
