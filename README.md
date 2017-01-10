# All Formation DEV
Formation pour Nomades Advenced Technologies à Genève

## Create a new Slides
- Open `./revealjs` and duplicate a file named by `slides-*.html`
- Clean code inside `<div class="slides"></div>`.
- Create new `<section></section>`
- Change .css imported file in header
- Open final file in browser
- add `?print-pdf#/` in URL
- Change the Destination setting to Save as PDF.
- Change the Layout to Landscape.
- Change the Margins to None.
- Enable the Background graphics option.
- Click Save.
- Save into `./revealjs/pdf` folder

<img src="https://camo.githubusercontent.com/e3b3088a2dd7a53caf72de529b3ce41465dd99f0/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f68616b696d2d7374617469632f72657665616c2d6a732f7064662d7072696e742d73657474696e67732d322e706e67">

## Publish
- `$ nvm use 7`
- `$ npm run deploy`

will update Github gh-pages

- and update master branch READEME.md with the new files
