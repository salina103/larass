<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id', 'title');
        $tags = Tag::pluck('id', 'title');

        $posts = [
            [
                'title' => 'Raspberry Swirl Cheesecake Bars',
                'description' => "While I’m not from a cheesecake family — it is never unwelcome, but we are more deeply devoted to things like pastry creams, chocolate pudding, and stellar coffee cakes — I married into one, which means that even though this site’s cheesecake archives are very well-populated, not a single peep of protest could be heard as far as my apartment walls reach (to be fair, a short distance) as I tinkered with these bars over the last few weeks.",
                'content' => "While I’m not from a cheesecake family — it is never unwelcome, but we are more deeply devoted to things like pastry creams, chocolate pudding, and stellar coffee cakes — I married into one, which means that even though this site’s cheesecake archives are very well-populated, not a single peep of protest could be heard as far as my apartment walls reach (to be fair, a short distance) as I tinkered with these bars over the last few weeks.

                It doesn’t hurt that they’re as pretty as the explosion of peonies that co-starred in this week’s photoshoot. They remind me of tie-dye, marble countertops, and wisps of smoke, yet require no cheffy brilliance to pull off — just a bag and a toothpick. But unlike baked goods where a flawless veneer makes me suspicious they’ll overpromise and underdeliver, these taste like the best of everything: a gently lemony, perfectly creamy, dead simple cheesecake layer swirled with a sweet-tart puree on a buttery graham crust. Or, a berry and cheese danish formatted as a picnic/potluck/party-ready bar. I hope you get to make them (or get someone to make them for you) as soon as possible.",
                'category' => 'Recipes',
                'tags' => ['cheesecake', 'raspberry', 'bars', 'dessert'],
                'thumbnail' => 'images/2026-05-19/raspberry-swirl-cheesecake-bars-12-scaled.png',
                'created_at' => Carbon::create(2026, 5, 8, 14, 0, 0),
            ],
            [
                'title' => 'Sidecar',
                'description' => "If there’s anything that’s been consistent about this site in its near-20 years of beaming (babbling?) hypertext to servers and back to you, it’s that I’m very bossy when I get into something new, especially cocktails. When I fell in love with Porch Swings, I wanted you to as well. Ditto for Blood Orange Margaritas (but only when in season), a Perfect Manhattan era that spanned over a decade, Boulevardier that has been woven into almost every year since, and a Slushy Paper Plane phase last year. This past winter and spring still, it’s been Sidecars, 1920s-era cocktails with about as many conflicting stories as my kids regale us with when they didn’t do their homework.",
                'content' => "If there’s anything that’s been consistent about this site in its near-20 years of beaming (babbling?) hypertext to servers and back to you, it’s that I’m very bossy when I get into something new, especially cocktails. When I fell in love with Porch Swings, I wanted you to as well. Ditto for Blood Orange Margaritas (but only when in season), a Perfect Manhattan era that spanned over a decade, Boulevardier that has been woven into almost every year since, and a Slushy Paper Plane phase last year. This past winter and spring still, it’s been Sidecars, 1920s-era cocktails with about as many conflicting stories as my kids regale us with when they didn’t do their homework.
                
                In the one I find the most amusing, an American army captain in World War 1-era Paris would apparently roll up to a bar in a motorcycle sidecar — I have many questions including: who was the driver? — and became a regular at Hôtel Ritz Paris or possibly Harry’s New York Bar, depending on who is telling the story. The captain would order a mix of cognac, orange liqueur, and lemon juice and eventually, bartenders named the drink after his particular vehicular quirk.
                
                In other origin stories, bartenders serve the drink with a little extra leftover from the cocktail shaker poured into a second glass… that they called the sidecar. Again, maybe it’s true, but I’m a skeptic, albeit a bemused one. I’m far more interested in its taste. I saw it referred to as the French cousin of a margarita, and honestly, I get it — it’s strong (from cognac), bright (from lemon), and slightly sweet (from orange liqueur) but balanced, as daisy drinks often are. Typically the sidecar is served with a sugared rim which I find completely unnecessary for taste (it is sweet enough) but cannot resist the way raw sugar gets a golden glint to it and include it here. We all need a little extra sparkle sometimes, right?",
                'category' => 'Cocktails',
                'tags' => ['cocktail', 'sidecar', 'brandy', 'classic'],
                'thumbnail' => 'images/2026-05-19/sidecar-7-scaled.png',
                'created_at' => Carbon::create(2026, 4, 24, 14, 0, 0),
            ],
            [
                'title' => 'Braised Leeks and Lentils with Arugula and Yogurt',
                'description' => "I’ve been pining for a springy way to combine leeks and lentils in an unfussy, one-pot, weeknight-friendly meal but would get stuck on one thing: how annoying leeks are — and I say this from a place of adoration! I think leeks are one of the most stunning vegetables, an ombre of chromatic ringlets from buttery yellow to pea green and back to a pale shade of lima. They look exactly like spring (even though it’s climatically July outside but will be March again next week), and taste even better: Oniony but not harsh and silky, wonderful, and a little sweet when braised. They should be everywhere, but first we need to address the fact that if you go to the store or market for a bundle of leeks right now, you have no idea how much leek you’re getting.",
                'content' => "I’ve been pining for a springy way to combine leeks and lentils in an unfussy, one-pot, weeknight-friendly meal but would get stuck on one thing: how annoying leeks are — and I say this from a place of adoration! I think leeks are one of the most stunning vegetables, an ombre of chromatic ringlets from buttery yellow to pea green and back to a pale shade of lima. They look exactly like spring (even though it’s climatically July outside but will be March again next week), and taste even better: Oniony but not harsh and silky, wonderful, and a little sweet when braised. They should be everywhere, but first we need to address the fact that if you go to the store or market for a bundle of leeks right now, you have no idea how much leek you’re getting.
                
                Here comes the side rant: A “bundle” could be two leeks, or it could be four. They could be the thickest, sandiest beast leeks with barely two to three inches of the white/pale green parts most recipes call for, or they could look like photos, with slimmer stalks full of usable parts. How can one write a recipe when the volume might end up being anywhere from 1 to 4 cups due to produce roulette? Weight, the most reliable way to buy almost any other ingredient, is also useless in providing guidance, as this is about the variable fraction of the vegetable that’s usable, and this cannot be weighed at the store.
                
                [I just said “variable fraction of the vegetable that’s usable.” I, too, am amazed I have any friends.]
                
                My solution here is to write a recipe that simply doesn’t care how much leek you have; it’s going to work regardless. You brown thick rings of however much leek your leeks yielded in olive oil in a pan* and then keep them there, adding garlic, a heap of scallions, lemon zest, broth, and dried lentils. Bring it to a simmer, transfer it to the oven to finish cooking (40 to 45 minutes) and in the meanwhile, make yourself a bowl of yogurt sauce with lemon juice and garlic, and an overdressed arugula salad, enough that there’s runoff below the greens. You can eat the finished dish right from the pot, dolloping it with the yogurt, piling the greens on top, and using the dressing run-off to give the lentils extra zip, or you can pile it on a plate. My plate starts with a piece of sourdough fried in olive oil; it’s great for pushing it all together and scooping it up. Together, this dish hits all of the notes for me — a warming pot of legumes but also a salad, all really simple with a short ingredient list, and perfect-when-reheated leftovers. I hope you get obsessed with it too.
                
                * Am I using the new pink peony Staub x Smitten Kitchen Braiser in an effort to entice the pink-obsessed, lentil-resistant 10-year-old who lives with me? Of course I am. Did it work? Bwahaha…",
                'category' => 'Vegan & Vegetarian',
                'tags' => ['leeks', 'lentils', 'braised', 'yogurt'],
                'thumbnail' => 'images/2026-05-19/braised-leeks-and-lentils-12-scaled.png',
                'created_at' => Carbon::create(2026, 4, 16, 14, 0, 0),
            ],
            [
                'title' => 'Black Bean Confetti Salad 2.0',
                'description' => "I’m not sure if this is a sign of hitting a certain age — like a sudden interest in bird feeders (check, and please tell me about yours), or beekeeping (well, in the TikTok sense, not sorry), and animated conversations on the best pillows (I hate mine) — but I’ve found over the last year that I have very strong opinions on chicken salad and the correct way to make it, which, naturally, is my way. I hope I’m in the right place to release them into the world.",
                'content' => "I’m not sure if this is a sign of hitting a certain age — like a sudden interest in bird feeders (check, and please tell me about yours), or beekeeping (well, in the TikTok sense, not sorry), and animated conversations on the best pillows (I hate mine) — but I’ve found over the last year that I have very strong opinions on chicken salad and the correct way to make it, which, naturally, is my way. I hope I’m in the right place to release them into the world.
                
                Most of my previous experiences with chicken salad, save one that briefly charmed me in my early SK years, are merely coincidentally the reason I have trust issues with chicken salad. I want to know who made it, and with what vintage of chicken. I need to know their views on curry powder, raisins, grapes, and aggressive levels of tarragon. I need to know where they fall on the mayo meter, as in, do they believe it should cling gently to pieces of chicken or should it be a pond that the chicken wades in? In essence, I know chicken salad is one of those things that’s easy to love when it’s made your way, at home, by you, and it’s okay if not all beloved things are meant for wider consumption. But I see no reason to let that stop me.
                
                And while you can eat this any way you wish, I’m sure you’re not surprised I have specific preferences here too. I like to toast still-hinged slider rolls in a small amount of butter in a skillet before layering them with a piece of crisp lettuce, a scoop of chicken salad, and then any toppings your heart desires, from thinly-sliced pickles to red pickled onions, or those aforementioned bits of crispy chicken skin I know you’re still thinking about or horrified by, depending on your orientation. [A 65-word sentence? AI could never.] To lure in children, I often set out each of these options in bowls so everyone can fix their own sandwich. Ruffled — not flat — potato chips are also nonnegotiable on chicken salad nights, which have turned into a monthly thing, a favorite dinner on days where we’re all on different dinner schedules.",
                'category' => 'Salads',
                'tags' => ['celery', 'chicken', 'dinner'],
                'thumbnail' => 'images/2026-05-19/black-bean-confetti-salad-v.2-7-scaled.png',
                'created_at' => Carbon::create(2026, 20, 13, 14, 0, 0),
            ],
            [
                'title' => 'Chicken Salad for Celery Enthusiasts',
                'description' => "Nearly a year ago, I told you about my favorite side dish. But what I failed to tell you is that these things change suddenly for no apparent reason. One day I’ll try something I’m certain sounds too uninteresting to be executed well–in that case, zucchini, almonds and a bit of parmesan, barely cooked–and the flavor blows my mind to the point that I must eat it that night, the next one and all the days that follow, then pausing for a couple weeks just to pick it up once more.",
                'content' => "Nearly a year ago, I told you about my favorite side dish. But what I failed to tell you is that these things change suddenly for no apparent reason. One day I’ll try something I’m certain sounds too uninteresting to be executed well–in that case, zucchini, almonds and a bit of parmesan, barely cooked–and the flavor blows my mind to the point that I must eat it that night, the next one and all the days that follow, then pausing for a couple weeks just to pick it up once more.
                
                Well, it has happened again. Two weeks ago, Alex and I got home late from the gym and decided to order salads from the French diner-ish place a couple blocks away, but I suddenly became worried that my salad would not be enough food and threw in a side of haricot vert, or those skinny French green beans I love so much. Nevertheless, my expectations were very low–I mean, you’ve got to cook these guys to a very specific point and then stop, and I failed to see how that would work when they needed to arrive warm.
                
                Yet here we are, two weeks later and this is the third or fourth time I’ve eaten them since. However, last night was the first time I got off my rump long enough to assemble it myself, which if you consider how ridiculously simple this is to make, is particularly sad.
                
                Or wouldn’t be if it weren’t so damned tasty. I mean, I’m drinking my morning coffee right now and I kind of wish I had more. Who knew that green beans, a bit of butter, a squeeze of lemon juice, a shallot and some diced tomatoes could be so colossally addictive?",
                'category' => 'Side Dishes',
                'tags' => ['green beans', 'haricot vert', 'shallots'],
                'thumbnail' => 'images/2026-05-19/chicken-salad-for-celery-enthusiasts-07-scaled.png',
                'created_at' => Carbon::create(2026, 5, 20, 14, 0, 0),
            ],
        ];

        foreach ($posts as $postData) {
            $categoryId = $categories[$postData['category']] ?? null;
            if (!$categoryId) {
                continue;
            }

            $post = Post::updateOrCreate(
                ['slug' => Str::slug($postData['title'])],
                [
                    'title' => $postData['title'],
                    'description' => $postData['description'],
                    'content' => $postData['content'],
                    'category_id' => $categoryId,
                    'thumbnail' => $postData['thumbnail'],
                    'views' => rand(100, 5000),
                    'created_at' => $postData['created_at'],
                    'updated_at' => $postData['created_at'],
                ]
            );

            $tagIds = [];
            foreach ($postData['tags'] as $tagTitle) {
                if (isset($tags[$tagTitle])) {
                    $tagIds[] = $tags[$tagTitle];
                }
            }
            $post->tags()->sync($tagIds);
        }
    }
}
