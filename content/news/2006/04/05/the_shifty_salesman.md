---
author: Greg Restall
title: "The Shifty Salesman"
date: 2006-04-05T12:16:16+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

Su Rogerson has brought to my attention a lovely rendition of [Curry's paradox](http://plato.stanford.edu/entries/curry-paradox/), due to [Peter Geach](http://www.npg.org.uk/live/search/person.asp?LinkID=mp05320), in his *Reason and Argument* (Blackwell, 1976), pages 93--95.  The discussion takes place at a car yard.  I'll quote the discussion, interspersed with some commentary.  (I'm quoting from a draft of Su Rogerson's thesis, and not from the text.  I'll check this for correctness when I have access to the volume.)

> *Customer*: I'll buy the car only if, if I buy the car, you'll guarantee it.

You might suspect that this claim of the customer's is *not* the best starting point for a car purchase negotiation, and that rather too much is conceded straight away.  But that's not quite right.  The customer has only conceded that the guarantee (conditional on the purchase) is *necessary* for the purchase, not sufficient.  (The claim is an 'only if' not an 'if'.)

> *Salesman*: But let's suppose that if you buy the car, then I'll guarantee it: what then? 
> 
> *Customer*: Then I'll buy the car.

That's the crucial concession.  It's all downhill from here. 

> *Salesman*: Can I hold you to both the things you've just said?
>
> *Customer*: Certainly.

The customer is going to regret saying that.

> *Salesman*: Then you are logically committed to buying the car anyhow, even if I don't guarantee it.
>
> *Customer*: What?!

The salesman is being a bit disingenuous at this point, but what he says is literally true, as we'll see.  

> *Salesman*: You say you'll by the car only on condition that if you buy the car I'll guarantee it?
>
> *Customer*: Yes, I do say that: I'm not a complete idiot!
>
> *Salesman*: Well then: if you'll buy the car, you'll buy the car only if I'll guarantee it. Right?
>
> *Customer*: Uh-uh.
>
> *Salesman*: But in logic '*p* only if *q*' is just a variant of 'if *p* then *q*'; so 'if *p*, then *p* only if *q*' is equivalent to 'if *p*, then if *p* then *q*' -- and that's equivalent to 'if *p*, then *q*.'
>
> *Customer*: What on earth has that got to do with my buying the car?

Indeed.

A couple of comments are worth making here.  (1) Beware of car salesmen who start spouting off dubious claims about logical equivalence. They're up to something fishy.   (2) What on earth is the qualifier 'in logic' doing in the salesman's claim? Can't the customer reply, "I'm not '*in logic*', I'm in a car yard trying to get out of my apparent commitment to buy this car"?  Surely it should be 'in our study of logic, we've figured out that ...' not some claim about what's true 'in logic' as that makes us wonder about if it's true elsewhere.   (3) The claim that '*p* only if *q*' and is *equivalent* to 'if *p* then *q*' is highly dubious in general, but here we don't need to consider he niceties of the semantics and pragmatics of conditionals.  We just simply need to note that both '*p* only if *q*' and 'if *p* then *q*' entail the much weaker claim that *p* materially implies *q* (that either *q* is true or *p* isn't) and read all other instances of 'if ... then' in the dialogue as material conditionals. (4) The inference principle appealed to by the salesman is the inference of *contraction* (from *p* &rarr; (*p* &rarr; *q*) to *p* &rarr; *q*).  Perhaps if the customer had read [my thesis](http://consequently.org/writing/onlogics/) he or she might have had a chance at resisting the slide at this point.  But I doubt it.  (5) *This is a completely irrelevant aside*. An exercise to the reader: Discuss whether or not it is, in fact, possible that a fictional character in a dialogue written in 1976 to read a Ph.D. thesis written nearly twenty years later.

On with the dialogue.

> *Salesman*: You said that if you'll buy the car, then you'll buy the car only if I'll guarantee it.  But that, you see, is logically equivalent to saying that if you'll buy the car then I'll guarantee it.
>
> *Customer*: Never mind what is logically equivalent to what!  Will you guarantee the car?

Good objection.  Keep track of whether or not the salesman *ever* addresses this point that the customer has made.

> *Salesman*: I'm not saying anything about that just now.  You said -- remember? -- that I can hold you to what you've said.  And you've as good as said that if you'll buy the car then I'll guarantee it.
>
> *Customer*: Well, yes, it looks as if I did say that.

At this point, I am reminded of many Socratic dialogues, in which a hapless victim says "Well, yes, Socrates, it does appear that you're right..."

> *Salesman*: But you also said that, on condition that if you'll but the car, I'll guarantee it, you undertake you'll buy the car.
>
> *Customer*: Yes I did.
>
> *Salesman*: But you are logically committed, as we just saw, to saying that the condition you stipulated is fulfilled: namely, that if you'll buy the car then I'll guarantee it.
>
> *Customer*: -- * -- ? * ! *

I'm not sure what the customer says at this point, but it does seem to be not particularly polite.  If I were the customer, I wouldn't be thinking polite thoughts, either.

> *Salesman*: So you've just got to buy the car, guarantee or no guarantee.

This is, either a sign of remarkable ignorance on the part of the salesman, or disingenuousness.  I leave it to you to decide which is the likelier explanation on the basis of the dialogue thus far.

But look at the customer's next step!

> *Customer*: But I said that I'll buy the car only if you'll guarantee it.  So if I am going to buy the car -- as you pretend to have proved that I must -- you've got to guarantee it.

Aha!  Good point.  Now, will the salesman address the issue of the guarantee?

> *Salesman*: I don't have to accept that.  You said I could hold you to what you said: that's all I've been doing.  I'm not bound by what you said, obviously.  So it's a deal.  I see you have your Access card there, sir.  Thankyou very much, Sir. Please sign here.

So, what do you think?  Is the salesman as disingenuous as I have made out?  *Should* the salesman have inferred that he will guarantee the car? 

I can't seem to find a way to make that plausible.  As shifty as the saleseman appears, it does seem that he's right.  He's helping the customer  see the consequences of what she/he has said.  Nothing he says commits *him*self to those claims.

However, it does seem to me that if the customer is still committed to the promise, then she/he is still committed to concluding that the salesman will guarantee the car.  In the face of manifest evidence that the salesman will *not* guarantee the car, then isn't the appropriate thing to conclude that it's *not* the case that the customer will buy the car if and only if he/she will buy the car only if there's a guarantee?  That is, shouldn't the customer take back the claim, or the conditional *promise* to buy the car.

Is this actually breaking a commitment?  

I don't think so, since the commitment has a factual consequence.  (If the commitment is *met* then the guarantee is made).  It's as if I promise to bring wash up after you cook dinner tonight.  If you decide *not* to cook dinner tonight, then there's nothing I can do to wash up after you cook dinner.    It was a silly promise to make, as meeting is beyond my control. Circumstances can conspire to make it *impossible* (in those circumstances) for me to meet the promise.  Similarly in the salesman case.  If the customer is committed to seeing to it that he/she purchases the car if and only if, he/she purchases the car only if it is guaranteed, then a consequent commitment is to see to it that the guarantee is made.  If that's outside the control of the customer, the commitment cannot be met.

So, I reckon, the customer shouldn't sign!  Don't buy the car.  An especially, don't trust car salesmen who appear to know a lot of logic.

Thanks to Su Rogerson for telling me about this wonderful dialogue.