# MediaWiki Skin 57n
This is a MediaWiki skin for the hackspace. It lives in GitHub at https://github.com/hackerdeen/MediaWiki_Skin_57n. The wiki is probably online at https://wiki.57north.org.uk/.





## Getting started
1. Get the code `git clone https://github.com/hackerdeen/MediaWiki_Skin_57n.git`
2. Install MediaWiki
3. Create a symlink to your working copy from the MediaWiki location, like `ln -s /home/andy/57north/MediaWiki_Skin_57n/fiftysevennorth /var/www/html/mediawiki/skins`
4. Adjust the LocalSettings.php loading the skin like `wfLoadSkin( 'fiftysevennorth' );`
5. Adjust the LocalSettings.php setting the default skin like `$wgDefaultSkin = "fiftysevennorth";`

## History
Back in maybe 2015, Ian asked Andy about making a MediaWiki skin for the hackspace, Andy said yes, and several years later actually got round to doing it.


## Libraries used
* TBC

## Useful links
* https://www.mediawiki.org/wiki/Manual:Skinning_Part_1
* https://www.mediawiki.org/wiki/Manual:Skinning_Part_2
* https://www.mediawiki.org/wiki/Manual:Skinning_Part_3


## Git cheatsheet

Clone the repo from github to local...

`git clone https://github.com/hackerdeen/MediaWiki_Skin_57n.git`
...or...
`git clone https://github.com/YourGithubUsername/MediaWiki_Skin_57n.git`

Add a file...

`git add dist/blah.php`

Commit...

`git commit -m "updates"`

Commit...

`git commit -a -m "updates"`

Send updates to master...

`git push -u origin master`

Get updates from master...

`git fetch origin`

`git pull`
