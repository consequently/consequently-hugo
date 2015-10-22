---
author: Greg Restall
title: "Degrees of Truth, Degrees of Falsity"
date: 2006-02-19T08:57:49+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

Toby Ord (a former student of mine, now taking Oxford by storm), has written up a nice short essay on [degrees of truth and degrees of falsity](http://www.amirrorclear.net/academic/ideas/degrees/).  It shows how you can get a very nice little algebra if you extend the usual non-classical idea of a 4-valued logic in which truth and falsity are somewhat independent with the "fuzzy" idea of degrees of truth between zero and one. Both ideas have a heritage.  The idea of considering the interval [0,1] as a lattice of truth values goes back to &#321;ukasiewicz, and the four-valued algebra, now known as BN4, traces back at least to some [early work by Mike Dunn](http://www.citeulike.org/user/greg_restall/article/123362).

Toby considers nice properties of this little algebra.  It seems to me that a good exercise for someone who likes fiddling with concrete algebras would be this: define a conditional &rarr; on the algebra such that 

* when restricted to the fuzzy interval [0,1] it agrees with &#321;ukasiewicz's conditional.
* when restricted to the values *t*, *b*, *n* and *f* agrees with the usual BN4 conditional.
* has as many natural properties as possible.  In particular, defining '*A* fuse *B*' as ~(*A* &rarr; ~*B*) gives an associative and commutative operator, and fusion is connected with the conditional by means of the usual residuation postulates.

If you do this, you'll have a nice concrete lattice which is a model for multiplicative and additive linear logic (and a little bit more -- it's distributive), and I'll have a nice example to talk about in [Non-Classical Logic](http://www.unimelb.edu.au/HB/subjects/161-212.html).

So, please go and read [Toby's Essay](http://www.amirrorclear.net/academic/ideas/degrees/), complete my exercise, and let me know what you come up with.
