<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rule Page</title>
    <link rel="stylesheet" href="cssFiles/rules.css">
</head>

<body>
    <h1>&nbsp; Midjourney prompts cheatsheet - Commands, properties, image hacks and more</h1>
    <div class="toc">
        <h3><strong>Table of Contents:</strong></h3>
        <ul>
            <li><a href="#intro">Midjourney Cheatsheet Introduction</a></li>
            <li><a href="#commands">Midjourney Commands List Cheatsheet</a></li>
            <li><a href="#parameters">Midjourney Parameter List Cheatsheet</a></li>
            <ul class="subtitle">
                <li><a href="#basic">Basic Parameters</a></li>
                <li><a href="#model">Model Version Parameters</a></li>
                <li><a href="#upscaler">Upscaler Parameters</a></li>
                <li><a href="#other">Other Parameters</a></li>
            </ul>

            <li><a href="#image">Image Generation Cheatsheet</a></li>
            <li><a href="#conclusion">Conclusion</a></li>
        </ul>
        <br>
        <h1 id="commands">Midjourney Commands List Cheatsheet</h1>
    </div>

    <table>
        <tr>
            <th>Rule</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>/imagine</td>
            <td>Generate an image using a prompt.</td>
        </tr>
        <tr>
            <td>/ask</td>
            <td>Get an answer to a question.</td>
        </tr>
        <tr>
            <td>/blend</td>
            <td>Easily blend two images together.</td>
        </tr>
        <tr>
            <td>/daily_theme</td>
            <td>Toggle notification pings for the #daily-theme channel update.</td>
        </tr>
        <tr>
            <td>/fast</td>
            <td>Switch to Fast mode.</td>
        </tr>
        <tr>
            <td>/help</td>
            <td>Shows helpful basic information and tips about the Midjourney Bot.</td>
        </tr>
        <tr>
            <td>/info</td>
            <td>View information about your account and any queued or running jobs.</td>
        </tr>
        <tr>
            <td>/stealth</td>
            <td>For Pro Plan Subscribers: switch to Stealth Mode.</td>
        </tr>
        <tr>
            <td>/public</td>
            <td>For Pro Plan Subscribers: switch to Public Mode.</td>
        </tr>
        <tr>
            <td>/subscribe</td>
            <td>Generate a personal link for a user's account page.</td>
        </tr>
        <tr>
            <td>/settings</td>
            <td>View and adjust the Midjourney Bot's settings.</td>
        </tr>
        <tr>
            <td>/prefer option</td>
            <td>Create or manage a custom option.</td>
        </tr>
        <tr>
            <td>/prefer option list</td>
            <td>View your current custom options.</td>
        </tr>
        <tr>
            <td>/prefer suffix</td>
            <td>Specify a suffix to add to the end of every prompt.</td>
        </tr>
        <tr>
            <td>/show</td>
            <td>Use an images Job ID to regenerate within Discord.</td>
        </tr>
        <tr>
            <td>/relax</td>
            <td>Switch to Relax mode.</td>
        </tr>
        <tr>
            <td>/remix</td>
            <td>Toggle Remix mode.</td>
        </tr>
    </table>
    <br>
    <div>
        <h1 id="parameters">Midjourney Parameter List Cheatsheet</h1>

        <h3 id="basic">Basic Parameters</h3>
        <ul>

            <li><span style="color: red;">--aspect or --ar:</span> Change the aspect ratio of a generation. Eg: <span
                    style="color: red;">--ar 2:3</span>
                <ul>
                    <li><span style="color: red;">--ar 1:1:</span> Default aspect ratio. </li>
                    <li><span style="color: red;">--ar 5:4:</span> Common frame and print ratio. </li>
                    <li><span style="color: red;">--ar 3:2:</span> Common in print photography. </li>
                    <li><span style="color: red;">--ar 7:4:</span> Close to HD TV screens and smartphone screens. </li>
                </ul>
            </li>
            <li><span style="color: red;">--chaos (number 0–100)</span> Change how varied the results will be. Higher
                values produce more unusual and unexpected generations. </li>
            <li><span style="color: red;">--no:</span> Negative prompting, remove plants from the image. </li>
            <li><span style="color: red;">--quality <.25, .5, 1, or 2> </span> or <span style="color: red;">--q <.25,
                        .5, 1, or 2>:</span> How much rendering quality time you want to spend. The default value is 1.
                Higher values cost more and lower values cost less. </li>
            <li><span style="color: red;">--seed (integer between 0–4294967295):</span> The Midjourney bot uses a seed
                number to create a field of visual noise, like television static, as a starting point to generate the
                initial image grids. Seed numbers are generated randomly for each image but can be specified with the
                <span style="color: red;">--seed</span> or <span style="color: red;">--sameseed</span> parameter. Using
                the same seed number and prompt will produce similar ending images. </li>
            <li><span style="color: red;">--stop (integer between 10–100) </span> :Use the <span
                    style="color: red;">--stop</span> parameter to finish a Job partway through the process. Stopping a
                Job at an earlier percentage can create blurrier, less detailed results. </li>
            <li><span style="color: red;">--style <4a, 4b or 4c></span> : Switch between versions of the Midjourney
                Model Version 4 </li>
            <li><span style="color: red;">--stylize <number></span> or <span style="color: red;">--s < number></span>:
                Parameter influences how strongly Midjourney’s default aesthetic style is applied to Jobs. </li>
            <li><span style="color: red;">--uplight</span> : Use an alternative “light” upscaler when selecting the U
                buttons. The results are closer to the original grid image. The upscaled image is less detailed and
                smoother. </li>
            <li><span style="color: red;">--upbeta</span> : Use an alternative beta upscaler when selecting the U
                buttons. The results are closer to the original grid image. The upscaled image has significantly fewer
                added details. </li>

        </ul>
        <br>
        <h3 id="model">Model Version Parameters</h3>
        <ul>
            <li><span style="color: red;">--niji</span>: An alternative model focused on anime style images. </li>
            <li><span style="color: red;">--hd</span> : Use an early alternative Model that produces larger, less
                consistent images. This algorithm may be suitable for abstract and landscape images. </li>
            <li><span style="color: red;">--test</span> : Use the Midjourney special test model. </li>

            <li><span style="color: red;">--testp</span> : Use the Midjourney special photography-focused test model.
            </li>

            <li><span style="color: red;">--version <1, 2, 3, 4 or 5></span> or <span style="color: red;">--v <1 2, 3, 4
                        or 5></span> : Use an earlier version of the Midjourney algorithm. The current algorithm (V5) is
                the default setting. </li>

        </ul>
        <br>
        <h3 id="upscaler">Upscaler Parameters</h3>
        <ul>
            <li><span style="color: red;">--uplight</span> : Use an alternative “light” upscaler when selecting the U
                buttons. The results are closer to the original grid image. The upscaled image is less detailed and
                smoother. </li>
            <li><span style="color: red;">--upbeta</span> : Use an alternative beta upscaler when selecting the U
                buttons. The results are closer to the original grid image. The upscaled image has significantly fewer
                added details. </li>
            <li><span style="color: red;">--upanime</span> : Use an alternative upscaler trained to work with the <span
                    style="color: red;">--niji </span>Midjourney Model. </li>

        </ul>
        <br>
        <h3 id="other">Other Parameters</h3>
        <ul>
            <li><span style="color: red;">--creative</span> : Modify the test and testp models to be more varied and
                creative. </li>
            <li><span style="color: red;">--iw</span> : Sets image prompt weight relative to text weight. The default
                value is <span style="color: red;">--iw 0.25</span>.</li>
            <li><span style="color: red;">--sameseed</span> : Seed values create a single large random noise field
                applied across all images in the initial grid. When <span style="color: red;">--sameseed</span> is
                specified, all images</li>

        </ul>
    </div>
    <br>
    <div>
        <h1 id="image">Image Generation Cheatsheet</h1>
    </div>

    <table>
        <tr>
            <th>Style</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>8k</td>
            <td>Lighting tends to be more extreme; colors even more saturated and computer-generated looking than "high
                definition"</td>
        </tr>
        <tr>
            <td>Cinematic</td>
            <td>Shadows tend to be more extreme (though not darker); objects a bit thicker; more poster-like</td>
        </tr>
        <tr>
            <td>high definition</td>
            <td>Shadows are lightened; more fanciful and saturated colors</td>
        </tr>
        <tr>
            <td>ultra photorealistic</td>
            <td>Similar to "fine ultra-detailed realistic"</td>
        </tr>
        <tr>
            <td>Hasselblad H6D</td>
            <td>Sharper focus on subject; shadows are deepened</td>
        </tr>
        <tr>
            <td>fine ultra-detailed realistic</td>
            <td>Can be a bit grainy and "ropey" but increases detail generation</td>
        </tr>
        <tr>
            <td>color grading</td>
            <td>Extreme variations in hue; vibrant but not over-saturated colors</td>
        </tr>
        <tr>
            <td>depth of field</td>
            <td>Sharp focus on subject, background and foreground blurred</td>
        </tr>
        <tr>
            <td>film lighting </td>
            <td>Limited lighting sources; backlighting common; deep shadows cast by light sources</td>
        </tr>
        <tr>
            <td>rim lighting</td>
            <td>Slightly stronger lighting effect than "film lighting," but very similar results</td>
        </tr>
        <tr>
            <td>intricate</td>
            <td>Tends toward non-realistic "crafts" and "pattern" type designs.</td>
        </tr>
        <tr>
            <td>realism</td>
            <td>Artistic realism. Backgrounds tend to be more uniform; subject looks more like a painting; more objects
                with subject</td>
        </tr>
        <tr>
            <td>photography</td>
            <td>Subject tends to have a little area of objects around it with little else in the background</td>
        </tr>
        <tr>
            <td>rendered for IMAX</td>
            <td>More complex subject with very directional lighting and subdued saturation</td>
        </tr>
        <tr>
            <td>tilt-shift</td>
            <td>Like "depth of field," but from above or with high angle</td>
        </tr>
        <tr>
            <td>motion-blur</td>
            <td>Speed lines. May render as if wind is blowing</td>
        </tr>
        <tr>
            <td>35mm film</td>
            <td>More vibrant colors, but muted saturation, detailed with additional foreground and/or background
                elements</td>
        </tr>
    </table>

    <script>
        function scrollToElement(id) {
            var element = document.getElementById(id);
            element.scrollIntoView({ behavior: "smooth" });
        }
    </script>
</body>

</html>