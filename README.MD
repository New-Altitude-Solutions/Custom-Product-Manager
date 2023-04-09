# CUSTOM PRODUCT MANAGER

## Plugin description

CUSTOM PRODUCT MANAGER is a plugin developed for the open-source e-commerce platform WooCommerce. It allows store administrator to set product extra-options with dynamic pricing that will be displayed on the product page. Custom Product Manager turns any shop product into a customizable product. Administrator can define product extra-options with relative costs that will fluctuate dynamically after user interaction. Options will then be displayed on the product page, cart page, checkout page & email order. 

## Requirements

* `WordPress` installed online or on a local web server.
* `WooCommerce` installed and activated (you can skip store settings in order to test quickly the plugin).
*  A **product** must be created and product regular **price** must be fixed before to start.

## Set up

* Download and unzip 'custom-product-manager', then paste its contents into the `/wp-content/plugins/`folder.
* Installed and activate the plugin through the WordPress plugins menu.

## How to use

1.	Choose or create a product, set the price.
2.	Select "custom product manager" in the product data panel. 
3.	For each option field, choose the type of options you want and fill the required informations. You can configure different settings that are common to all options:
* **Option label**: name of the option that will appear on the product page.
* **Option type**: Choose between 14 types of options.
* **Option description**: description of the option that will appear under the option name on the product page.
* **Option help-tip**: short text revealed by hovering an icon to the left of the option name.
* **Option required**: whether or not the option is required in order to add the product to the cart.
* **Hide option output**: whether the option cost appears in the option field after interaction or not.
* **Option cost**: setting the option cost.
4.Click on "Save and display option *" and go on the product page or refresh it. The option will be deployed on the product page and activated in the administration dashboard. 
5. The settings tab allows you to define the type of cost calculation and some text strings on the product page and cart page.

## Options Overview

#### 1 - <ins>TEXT</ins>
Text input displayed on the product page that allows the user to write a short text. Text option also allows the administrator to set: 
* **Option placeholder**: dimmed text in input before interaction.
* **Text min length**: minimum number of letters.
* **Text max length**: maximum number of letters.
#### 2 - <ins>NUMBER</ins> 
Number input displayed on the product page that allows the user to write a number. Number option also allows the administrator to set: 
* **Number min value**: minimum number.
* **Number max value**: maximum number.
* **Number step value**: number interval value.
#### 3 - <ins>EMAIL</ins> 
Email input displayed on the product page that allows the user to write an email. Email option also allows the administrator to set: 
* **Email max length**: maximum number of characters.
#### 4 - <ins>URL</ins> 
Url input displayed on the product page that allows the user to write the url of a website. Url option also allows the administrator to set: 
* **Url min length**: minimum number of characters.
* **Url max length**: maximum number of characters.
* **Url pattern**: http, https, or both.
#### 5 - <ins>PHONE</ins> 
Phone input displayed on the product page that allows the user to write a phone number. Phone option also allows the administrator to set: 
* **Phone min length**: minimum number of characters.
* **Phone max length**: maximum number of characters. 
* **Dialling code**: code du pays qui s’affichera par défaut.
#### 6 - <ins>TEXTAREA</ins> 
Textarea input displayed on the product page that allows the user to write a long text. Textarea option also allows the administrator to set: 
* **Textarea max length**: maximum number of characters.
#### 7 - <ins>RADIO BUTTONS</ins> 
Radio option allows the administrator to set between 2 and 4 radio buttons that will appear on the product page in the corresponding option field. The radio option also allows the administrator to set:
* **Option label 1**: name of the first radio button.
* **Option cost 1**: cost of this option when clicked.
* **Option label 2**: name of the second radio button.
* **Option cost 2**: cost of this option when clicked.
* **Add new radio**: The administrator can click this button to add up to 2 additional radio buttons for the corresponding field. 
#### 8 - <ins>BUTTONS</ins>
Button option allows the administrator to set up 3 to 6 buttons that will appear on the product page. The button option also allows the administrator to to set:
*   **Option label 1**: name of the first button.
*	**Option cost 1**: cost of this option when clicked.
*	**Option label 2**: name of the second button.
*	**Option cost 2**: cost of this option when clicked.
*	**Option label 3**: name of the third button.
*	**Option cost 3**: cost of this option when clicked.
*	**Buttons number**: The administrator can set up 3 to 6 buttons.
#### 9 - <ins>CHECKBOXES</ins> 
Checkbox option allows the administrator to set up 1 to 4 checkboxes that will appear on the product page. The checkbox option allows the administrator to to set:
*	**Option label 1**: name of the first checkbox.
*	**Option cost 1**: cost of this option when clicked.
*	**Add new checkbox**: The administrator can click this button to add up to 3 additional checkboxes for the corresponding option field (4 in total).
#### 10 - <ins>UPLOAD AJAX</ins> 
Upload option displays a button that allows the user to upload a file with Ajax: the page will not need to refresh in order to complete the upload and display the result in the option field. The upload option also allows the administrator to set: 
*	**Upload max size**: maximum file size (default 5000MB).
*	**Set files restriction**: the administrator can set file restrictions based on the mime type (jpg, pdf, svg, etc.). At least 100 file types are available and by default restricted.
#### 11 - <ins>IMAGES</ins> 
Image option allows the administrator to set up between 2 and 4 clickable images that will appear on the product page. The image option allows the administrator to set:
*	**Option label 1**: name of the first image.
*	**Option cost 1**: cost of this option when clicked.
*	**Option label 2**: name of the second image.
*	**Option cost 2**: cost of this option when clicked.
*	**Upload image**: image that will appear on the product page.
*	**Add new image**: The administrator can click this button to add up to 2 additional images for the corresponding option field (4 in total)
#### 12 - <ins>SELECT DROPDOWN</ins>
Select option allows the administrator to set up a selector containing 2 to 6 sub-options that will be displayed on the product page. The select option also allows the administrator to set: 
*	**Option label 1**: name of the first suboption.
*	**Option cost 1**: cost of this option when clicked.
*	**Option label 2**: name of the first suboption.
*	**Option cost 2**: cost of this option when clicked.
*	**Add new select**: The administrator can click this button to add up to 4 additional sub-options within the selector for the corresponding option field (6 in total).
#### 13 - <ins>COLOR</ins> 
Color option allows the administrator to set up an input field with a color picker that will appear on the product page and allow the user to choose a custom color. 
#### 14 - <ins>NUMBER CALCULATION</ins> 
Number calculation option allows the administrator to set up one or two number input fields with a calculation formula. These two number input fields will appear on the product page and the calculation will be performed during user input. The result will be added to the price of the product. Number calculation option allows the administrator to set:
*	**Number min value** : minimum number.
*	**Number max value**: maximum number.
*	**Number step value**: number interval value.
*	**Add new calcul input**: The administrator can click this button to add the second number entry field to the product page.
* **Calcul formula**: the formula of the calculation. If the administrator chooses only one number input field for its calculation: $user_value is required in the formula and refers to the value the user will enter. If the administrator chooses two number input fields: $second_user_value also becomes mandatory in the formula and refers to the second value the user will enter on the product page.

## Cart and Checkout 

If the user has chosen options when adding the product to the cart, the plugin will create an accordion for this product in the cart page. A new line will also be create in the Cart totals summary. Each accordion drop-down header will summarize the chosen option and will contain 3 columns: "label" (option name), "content" (option content), and "cost" (option cost).

#### Quantity related enabled

* Default last accordion drop-down header text : "Total price". You can modify this text in the Settings section.
* The last drop-down header of the product accordion will contain 3 columns: "Initial price" (product price), "Total cost" (option cost), "New price" (new product price).
* Cart totals defaut text : "Total cost incl". You can modify this text in the Settings section.

#### Quantity related disabled

* Default last accordion drop-down header text  : "Total option". You can modify this text in the Settings section.
* The last drop-down header of the product accordion will contain only one row that summarize all options cost for the product.
* Cart totals defaut text : "Total cost". You can modify this text in the Settings section.

## Settings

The settings tab of the product admin panel allows the administrator to configure some general settings:
*	**Quantity related**: If this box is checked, the price of the options will be correlated with the quantity.
    * Enabled : Option costs are added to product price and quantity related.
    * Disable : Option costs are added to the total and not quantity related. 
*	**Table header text**: the text on the last tab of the options accordion on the shopping cart page.
*	**Summary text**: Last Row Text of the cart Total.
*	**Free option text**: text that appears when the option is free.
*	**Cost option text**: text that appears when the price of the option appears.
*	**Add cart button text**: text of the product button on the shop page if at least one option is active.

## Appearance

We've left the inputs as raw as possible to avoid conflicting with the theme's style files. In the WordPress philosophy, a plugin should primarily focus on features and functionalities.
Some style elements have been incorporated into the plugin. The style files of the public part of the plugin can be viewed in the ".../public/css/" folder. This folder contains the following files:
*	`jquery-ui.css`: default style file for jQuery UI elements.
*	`cpm_cart.css`: style file relative to the shopping cart page.
*	`cpm_checkout.css` : checkout page style file.
*	`cpm_img_swap.css`: image style file and the display of images in their option fields on the product page. 
*	`custom-product-manager-public.css`: main style file of the plugin, it only imports the previous 3 files. 
If you want to stylize the form, you can use your browser’s inspector and edit the elements in your theme’s “style.css” file.
If you want to edit or delete HTML elements from the form on the product page, you can edit the `.../display_template.php` file located in the public folder of the plugin.

## Files structure

The WordPress Plugin Boilerplate has been used and provides an object-oriented foundation that respects the important rules set by WordPress for plugin development. The admin folder contains the code for the administrator part of the plugin, while the public folder contains all the code effective on the user side.

## Languages

English and french version currently available. German and italian version soon available. 

## Support

In case you need support, please contact us at **contact@new-altitude-solutions.com**

## License

CUSTOM PRODUCT MANAGER is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the theme directory. The file is named `LICENSE.TXT`.

# Credits

[New-Altitude-Solutions]
