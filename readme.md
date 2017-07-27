# Kirby Snippet Tag

This Kirby plugin allows you to use snippets in Kirbytext.

## Installation
1. [Download Plugin](https://github.com/derdeedas/kirby-snippet-tag/archive/master.zip)
1. Unzip
1. Rename folder from `kirby-snippet-tag-master` to `snippet-tag`
1. Move `snippet-tag` folder into `site/plugins`.

## Basic Example
```md
(snippet: portfolio)
```
Embeds `portfolio` snippet.

## Advanced Example
```md
(snippet: portfolio data: ['limit' => 3])
```
Embeds `portfolio` snippet with data `['limit' => 3]`

Data is now available in the portfolio snippet by using `$limit`.
