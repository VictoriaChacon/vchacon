# vchacon

Personal Website Project documentation.

## PWP Milestone 1 Feedback
Nice work here Victoria. Your Purpose, Audience, Goals, Persona and Use Case are all well defined. This will give you a solid direction upon which to begin your design process. I'm interested in seeing your ideas for displaying your work - a gallery maybe? Your directory structure is perfect, and your HTML looks great! There were just a couple of very minor notes I made regarding your code - see Edits &amp; Suggestions below. Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Nice job.

### Edits &amp; Suggestions
- Don't forget to include the `alt` attribute on all images, and the `src` path needs to be placed in double quotes. (see line 26)
- This is super minor - but in your .gitignore, add a '/' before `.idea`.


## PWP Milestone 2&alpha; Feedback
Whoa! I love this. 

Excellent wireframes, and I love the clarity of vision here. How do you feel about JavaScript? Because that will be necessary for the animated page transitions and gallery effects you're looking for.

Take a look at [smoothstate.js](https://github.com/miguel-perez/smoothState.js) and the accompanying [CSS Tricks Tutorial](https://css-tricks.com/add-page-transitions-css-smoothstate-js/). I have not personally implemented this, but give it a look and I will too. From what I gather from a quick glance, this will necessitate that you build out pages for each section that is transitioned into the view.

If this does not look like something that will work for you, I suggest that a good plan B could be a single-page scrolling layout with some simple CSS and/or jQuery effects. Custom building the fancy full-page transitions is very ambitious, and potentially out-of-scope.

For your gallery, from what I can gather - the mobile version and the full-screen version have different functionality and layouts. I do like the differentiation, but for the sake of MVP scope I advise on choosing one gallery style and having it be mobile-first and responsive. Galleries can be complex interfaces, especially when they are interactive, so let's start with one that works great on mobile AND full-screens, then customize your full-screen specific gallery down the line.

There are plenty of mobile-friendly, responsive, jQuery-driven gallery plugins to choose from. Here are a few suggestions:
-[Swipebox](http://brutaldesign.github.io/swipebox/)
-[Lightbox](http://lokeshdhakar.com/projects/lightbox2/)
-[Fancybox](http://fancyapps.com/fancybox/)

It looks like you plan on having a custom nav footer on mobile only - I like it. This means you would build two navs: the one at the bottom would be the default navbar (for mobile - see the [fixed-to-bottom nav](http://getbootstrap.com/components/#navbar-fixed-bottom)), and a top nav on full-width screens only. Have a look at the following [Bootstrap Navbar Options](http://getbootstrap.com/components/#navbar) and  [Bootstrap Responsive Utilities](http://getbootstrap.com/css/#responsive-utilities)

Using `background-attachment: fixed;` can keep background images set in CSS fixed in one place as the user scrolls. Have a look at the source code for the examples [here](https://bootcamp-coders.cnm.edu/~rlewis37/simple-template/public_html/) and [here](https://bootcamp-coders.cnm.edu/class-materials/bootstrap/stellar-parallax.php)

And take a look at [FontAwesome](http://fontawesome.io/) for your social media icons.

Overall, love your work here - I'm looking forward to seeing your project take shape. Since your design choices are ambitious, I would suggest giving the [Bootstrap Challenge](https://bootcamp-coders.cnm.edu/~rlewis37/bootstrap-practice/) a shot, and spend some extra time exploring JavaScript events and jQuery syntax (it's easy!). Your Milestone 2&alpha; passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric) You are clear to begin development on your PWP.
