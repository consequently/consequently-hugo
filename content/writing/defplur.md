---
## Discuss
```dataview
TABLE WITHOUT ID

	link(file.link, ""
	
		+ " " + truncate(choice(nickname, nickname, choice(title, title, file.name)),50,"…")
	
	)
	as "Project",

 truncate(summary,180,"…") as "Summary",

category as "Category"
		
FROM -"!scaffolding"
WHERE type = "project" and status = "discuss" 
	AND (start <= date(today))
	AND !contains(file.path, "_") 
	AND !contains(file.path, "!")
SORT choice(scheduled > due, scheduled, default(due,1)) ASC, default(priority,0) DESC, file.name ASC
```
title: Defending Logical Pluralism

author: JC Beall and Greg Restall
published: true
type: published
status: Published in 2001
citation: "(with <a href=\"http://vm.uconn.edu/~wwwphil/beall.html\">JC Beall</a>) &ldquo;Defending Logical Pluralism,&rdquo; pages 1&ndash;22 in <em>Logical Consequence</em>&#58; <em>Rival Approaches Proceedings of the 1999 Conference of the Society of  Exact Philosophy</em> (Stanmore&#58; Hermes, 2001), John Woods and Bryson Brown (editors), ISBN 1-903398-17-5."
tag: defplur
file: defplur.pdf
subjects: pluralism entailment paraconsistency models
count: 26
comments: yes
date: 2001-07-03
publishdate: 2001-07-03
filter:
  - erb
  - markdown
  - rubypants
---
A defence of logical pluralism against a number of objections, primarily from Graham Priest in his article &ldquo;Logic: One or Many&rdquo; in the same volume.
