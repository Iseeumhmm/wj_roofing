
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WJ_Roofing
 */

get_header();
?>
	<style>
		.banner-image-1 {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-about.jpg')
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main about-page">
			<div class="banner-image banner-image-main banner-image-1"></div>
			<div class="main-container padding-main-y text-regular">
				<h2 class="text-black">Privacy Policy</h2><br>
				<p>When you conduct business with W.J. Roofing Ltd., you can be assured that your privacy is protected. W.J. Roofing Ltd. respects your right to control the collection, use and disclosure of your personal information.
				Please read this privacy policy before using this site. By using the site, you are accepting the practices described in this
				privacy policy.</p><br>
				<p>This policy may be changed at any time without notice. W.J. Roofing Ltd. will post any changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.
				You are encouraged to review the privacy policy at anytime.</p><br>
				<h2 class="text-black">Information Collection</h2>
				<p>You can visit all public areas of wjroofing.com without providing any personal information about yourself. wjroofing.com
				tracks only information based on a visitor's Internet Protocol address (IP). Information collected includes the date and
				time of visit, the type of Internet browser used to access the site, the country of origin and the referring URL address, as
				well as which of the Web pages on wjroofing.com you have accessed. This data is used to create statistics on site
				usage and to help develop wjroofing.com to display properly for the majority of our visitors.
				We only collect personal information that I need for the following purposes:</p>
				<ul>
					<li>- To understand your needs and to meet those needs</li>
					<li>- To detect and prevent fraudulent activity on wjroofing.com</li>
					<li>- To meet legal requirements and to protect both our customers and W.J. Roofing Ltd. from legal action(s)</li>
				</ul><br>
				<h2 class="text-black">What information do you collect when I complete quote form?</h2>
				<p>The "Name", "Email", “Address”, “Phone” and "Quote details" fields are required to complete the form.</p><br>
				<h2 class="text-black">Distribution of Information</h2>
				<p>W.J. Roofing Ltd. will only use or disclose your personal information with your consent. We will only retain your
				information as long as necessary to fulfill identified purposes.<br><br>
				W.J. Roofing Ltd. may share information with government agencies or other companies helping us to investigate or
				prevent fraud. We may do so when: (1) permitted or required to do so by law; or, (2) preventing or attempting to prevent
				actual or potential unauthorized actions or fraud; or, (3) investigating past fraud. We will not however share user
				information with third parties for marketing purposes.<br><br>
				NOTE: Information about spammers, potential hackers, and others conducting questionable behavior will be provided to
				appropriate law enforcement officers for possible prosecution. Spammers, hackers, and others conducting questionable
				behavior (such as those using site-ripping software and spambots) will also be banned from this website and reported to
				appropriate authorities, solely at the discretion of the website owner and server owner.</p><br>
				<h2 class="text-black">Privacy Policies of Websites Hyperlinked to from wjroofing.com</h2>
				<p>wjroofing.com may contain hyperlinks to third party websites. We are not responsible for the privacy practices or the
				content of such third-party websites or advertisers. We do not share any of the individual personal information you
				provide with the third parties to which wjroofing.com links. Please check with those websites to determine their privacy
				policy.</p><br>
				<h2 class="text-black">Safeguards</h2>
				<p>wjroofing.com is obligated to protect your personal information by making reasonable security arrangements against
				such risks as unauthorized access, use, collection, disclosure or disposal. Security measures have been integrated into
				the design, implementation and day-to-day operating practices as part of our commitment to protect the personal
				information we hold.</p><br>
				<h2 class="text-black">Privacy Contact Information</h2>
				<p>W.J. Roofing Ltd. welcomes any questions or concerns about this Privacy Policy. If you have any such questions or
				concerns, please use the “Contact Us” page</p>
			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
