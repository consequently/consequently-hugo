+++
date = "2017-07-11T11:17:18+11:00"
title = "Typesetting Flow Graphs with tikz"
description = "In my recent papers, I've been using flow graphs, showing the flow of information in propositional logic proofs. Here I explain how to typset them."
largeimage = true
image = "images/flowgraph.jpg"

+++

In a few [recent](http://consequently.org/writing/proof-terms-for-classical-derivations/) [papers](http://consequently.org/writing/cfss2dml/) [and](http://consequently.org/presentation/2017/a-category-of-classical-proofs-tacl/) [talks](http://consequently.org/presentation/2017/proof-identity-invariants-and-hyperintensionality/), I've been using *flow graphs* to display the flow of information in proofs. These are the kinds of things that are easy to draw, but they're not so straightforward to typeset. 

<!--more-->

Here's an example:
<figure>
	<img src="/images/flowgraph.jpg" alt="a flow graph on a natural deduction proof">
	<figcaption>A flow graph on a natural deduction proof.</figcaption>
</figure>

They're not easy to typset, because they're an overlay over a proof. The arrows indicate the flow of information inside a proof. 

As an aside, I love the flow graph on this natural deduction proof because the ''action at a distance'' nature of the disjunction elimination step is called out by those two sweeping blue and green arcs---the \\(q\\) and \\(r\\) assumptions are discharged by the appeal to the disjunctive conclusion \\(q\lor r\\). These are the only non-local informational connections in the proof. Each other arc in the flow graph is local, from a premise to a conclusion.

Now, typesetting these things is not straightforward, because the locations of the arrows are defined by typesetting the underlying proof (here, the black text) and the coloured arcs are typeset on top. How do you do that? And how do you do that in an algorithmic and structural way, focussing on the structure and not hand positioning each of the lines?  

Thankfully, the tools to typset flow graphs are readily available, at least if you use [LaTeX](http://tug.org). I've written up a little document explaining how to do this, and the document and source are now [available on Github](https://github.com/consequently/flowgraphs) for you to use as you see fit. If you've got any questions, feedback or recommendations for how to extend the technique, please don't hesitate to get in touch. 

I hope it's helpful.

* [https://github.com/consequently/flowgraphs](https://github.com/consequently/flowgraphs)