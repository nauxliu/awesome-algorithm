### wilsonInterval
一般来说，排名算法如果纯粹的计算得分或者好评率，都会在一定程度上出现排名结果的不合理。[具体原因](http://www.ruanyifeng.com/blog/2012/03/ranking_algorithm_wilson_score_interval.html)。现在简要说明一下威尔逊区间在排名算法当中的应用。首先，用户的投票结果可以看成是一个二项分布：

1. 每个用户的投票都是一个独立事件。
2. 每个用户都只能投赞同票或者反对票。
3. 如果投票总人数为 n，其中赞同票为 k，那么赞同票的比率 p = k/n。

一般来说，p 的比率越高，那么该结果就应该排在越前面，但是如果样本数量太小，那么 p 也就不太可信，所以在这里需要引入置信区间的概念。在计算时，除了计算 p，还得计算出 p 的置信区间，根据 p 的置信区间的下限值来进行排名：

+ 首先，计算 p(好评率)。
+ 然后计算 p 的置信区间。
+ 根据 p 的置信区间的下限值进行排名。

传统的计算置信区间的方法，如 **正态分布**，在小样本时的准确性很差，而美国数学家 威尔逊 提出的 **威尔逊区间** 概念很好的解决了这一问题，公式如下：


<img src="http://http://www.forkosh.com/mathtex.cgi?%5Cfrac%7B%5Chat%7Bp%7D%2B%5Cfrac%7B1%7D%7B2n%7Dz%5E%7B2%7D_%7B1-%5Cfrac%7B%5Calpha%7D%7B2%7D%7D%5Cpm%20z_%7B1-%5Cfrac%7B%5Calpha%7D%7B2%7D%7D%5Csqrt%7B%5Cfrac%7B%5Chat%7Bp%7D(1-%5Chat%7Bp%7D)%7D%7Bn%7D%2B%5Cfrac%7Bz%5E%7B2%7D_%7B1-%5Cfrac%7B%5Calpha%7D%7B2%7D%7D%7D%7B4n%5E%7B2%7D%7D%7D%7D%7B1%2B%5Cfrac%7B1%7D%7Bn%7Dz%5E%7B2%7D_%7B1-%5Cfrac%7B%5Calpha%7D%7B2%7D%7D%7D%22">

<img src="http://www.forkosh.com/mathtex.cgi?%5Chat%7Bp%7D"> 是表示 赞成票比例。n 表示样本大小， z1-α/2 表示对应某个置信水平的 z 统计量，这是一个常数，一般情况下，在 95% 的置信水平下，该值为 1.96。那么就可以通过计算出它的下限值来进行排名了。
