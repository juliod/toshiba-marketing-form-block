/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

/* eslint-disable no-console */
console.log(
	'Hello World! (from toshibamarketing-toshiba-marketing-form-block block)'
);
/* eslint-enable no-console */

// eslint-disable-next-line eslint-comments/disable-enable-pair
/* eslint-disable no-undef */
document.querySelectorAll( 'form.wp-toshiba-marketinblock-form' ).forEach( function ( form ) {
	// Bail If the form is not using the mailto: action.
	if ( ! form.action || ! form.action.startsWith( 'mailto:' ) ) {
		return;
	}

	const redirectNotification = ( status ) => {
		const urlParams = new URLSearchParams( window.location.search );
		urlParams.append( 'wp-form-result', status );
		window.location.search = urlParams.toString();
	};

	// Add an event listener for the form submission.
	form.addEventListener( 'submit', async function ( event ) {
		event.preventDefault();
		// Get the form data and merge it with the form action and nonce.
		const formData = Object.fromEntries( new FormData( form ).entries() );
		formData.formAction = form.action;
		formData._ajax_nonce = wpBlockFormSettings.nonce;
		formData.action = wpBlockFormSettings.action;
		formData._wp_http_referer = window.location.href;
		formData.formAction = form.action;

		try {
			const response = await fetch( wpBlockFormSettings.ajaxUrl, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded',
				},
				body: new URLSearchParams( formData ).toString(),
			} );
			if ( response.ok ) {
				redirectNotification( 'success' );
			} else {
				redirectNotification( 'error' );
			}
		} catch ( error ) {
			redirectNotification( 'error' );
		}
	} );
} );
