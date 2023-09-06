<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $articles = $this->getArticles();
        $page = $request->input('page', 1); // Get the current page from the request query parameters

        // Paginate the articles with 6 articles per page
        $perPage = 6;
        $total = count($articles);
        $paginatedArticles = new LengthAwarePaginator(
            collect(array_slice($articles, ($page - 1) * $perPage, $perPage)),
            $total,
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('blog', compact('paginatedArticles'));
    }

    private function getArticles()
    {
        $articles = [
            [
                'id' => '1',
                'title' => 'Exploring Sustainable Aquaculture Practices',
                'image' => 'https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000',
                'author' => 'John Doe',
                'date' => 'Sep 1, 2022',
                'comments' => 15,
                'content' => 'Discover the latest advancements in sustainable aquaculture and how it\'s shaping the future of fish farming.',
                'content_1' => 'Sustainable aquaculture practices',
                'highlighted_line1' => 'Shaping the future of fish farming',
                'content_2' => 'Learn about the innovative techniques and methods being used in sustainable aquaculture to ensure a brighter future for fish farming.',
                'subtitle_1' => 'Innovative Aquaculture',
                'para_1' => 'Aquaculture has come a long way in recent years, with a focus on sustainability and efficiency. This article explores some of the cutting-edge techniques being used to produce fish in an environmentally friendly manner. Whether you\'re a seafood enthusiast or interested in sustainable agriculture, you won\'t want to miss this.',
                'image_2' => 'https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000',
                'subtitle_2' => 'Sustainable Fish Farming',
                'para_2' => 'Sustainable fish farming is not just an environmental concern; it also impacts the availability of seafood for future generations. This article delves into the practices and technologies that are transforming aquaculture into a more sustainable industry. From recirculating aquaculture systems to responsible feed sourcing, there are many exciting developments to explore.',
                'para_3' => 'Join us on a journey through the world of sustainable aquaculture and discover how it holds the key to meeting the growing global demand for seafood while preserving our oceans.'
            ],
            [
                'id' => '2',
                'title' => 'The Future of Sustainable Agriculture',
                'image' => 'https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg',
                'author' => 'Jane Smith',
                'date' => 'Aug 15, 2022',
                'comments' => 10,
                'content' => 'Explore the innovative practices and technologies revolutionizing the field of sustainable agriculture.',
                'content_1' => 'Innovations in Agriculture',
                'highlighted_line1' => 'Revolutionizing sustainable farming',
                'content_2' => 'Discover how cutting-edge technologies and sustainable practices are reshaping the future of agriculture.',
                'subtitle_1' => 'Smart Farming Solutions',
                'para_1' => 'From precision agriculture to data-driven farming, explore the innovations driving sustainability in agriculture and ensuring food security for all.',
                'image_2' => 'https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg',
                'subtitle_2' => 'Feeding a Growing Population',
                'para_2' => 'As the global population grows, sustainable agriculture becomes more critical than ever. Learn how modern farming techniques are addressing this challenge.',
                'para_3' => 'Join us on a journey to explore the future of sustainable agriculture.',
            ],
            [
                'id' => '3',
                'title' => 'Boosting Soil Fertility with Organic Amendments',
                'image' => 'https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg',
                'author' => 'Sarah Adams',
                'date' => 'Mar 15, 2022',
                'comments' => 9,
                'content' => 'Learn about the benefits of organic amendments and how they can enhance soil fertility for sustainable agriculture.',
                'content_1' => 'Enhancing Soil Fertility',
                'highlighted_line1' => 'Organic amendments for healthier soil',
                'content_2' => 'Discover the magic of organic soil amendments and how they transform barren land into fertile ground for sustainable farming.',
                'subtitle_1' => 'The Power of Organic Matter',
                'para_1' => 'Organic amendments like compost and biochar are nature\'s gifts to farmers. Learn how these natural substances can rejuvenate soil and promote sustainable agriculture.',
                'image_2' => 'https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg',
                'subtitle_2' => 'From Barren to Bountiful',
                'para_2' => 'Barren soils can be a thing of the past. Explore the success stories of farmers who have witnessed the incredible transformation of their fields.',
                'para_3' => 'Join us on a journey to explore the world beneath our feet and the secrets of soil fertility.',
            ],
            [
                'id' => '4',
                'title' => 'The Importance of Crop Rotation in Pest Management',
                'image' => 'https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000',
                'author' => 'Mark Wilson',
                'date' => 'Feb 10, 2022',
                'comments' => 6,
                'content' => 'Discover how crop rotation can be an effective strategy in managing pests and preserving soil health in agriculture.',
                'content_1' => 'Pest Management Strategies',
                'highlighted_line1' => 'Crop rotation for pest control',
                'content_2' => 'Learn the art of crop rotation and its role in keeping harmful pests at bay while maintaining soil fertility.',
                'subtitle_1' => 'Natural Pest Control',
                'para_1' => 'Chemical pesticides can have detrimental effects on the environment. Explore the natural and sustainable alternative of crop rotation.',
                'image_2' => 'https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000',
                'subtitle_2' => 'Balancing Act',
                'para_2' => 'Crop rotation is not just about pest control; it also promotes soil health. Discover the delicate balance farmers achieve through this practice.',
                'para_3' => 'Join us on a journey to uncover the ancient wisdom of crop rotation and its modern-day applications.',
            ],
            [
                'id' => '5',
                'title' => 'Exploring Organic Pest Control Methods',
                'image' => 'https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000',
                'author' => 'Laura Carter',
                'date' => 'Jan 20, 2022',
                'comments' => 7,
                'content' => 'Explore various organic methods for pest control in agriculture and their eco-friendly benefits.',
                'content_1' => 'Organic Pest Control',
                'highlighted_line1' => 'Safeguarding crops naturally',
                'content_2' => 'Delve into the world of organic pest control and discover nature\'s solutions to protect your crops sustainably.',
                'subtitle_1' => 'Eco-Friendly Solutions',
                'para_1' => 'Chemical pesticides can harm beneficial insects and the environment. Learn about organic alternatives that strike a balance between pest control and ecology.',
                'image_2' => 'https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000',
                'subtitle_2' => 'A Harmonious Approach',
                'para_2' => 'Organic pest control methods aim to create harmony between agriculture and nature. Explore how these techniques benefit both farmers and the environment.',
                'para_3' => 'Join us on a journey to discover the sustainable way of protecting your crops from pests.',
            ],
            [
                'id' => '6',
                'title' => 'Advancements in Bio Fungicides for Disease Management',
                'image' => 'https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg',
                'author' => 'Daniel Miller',
                'date' => 'Dec 5, 2021',
                'comments' => 8,
                'content' => 'Stay updated on the latest developments in bio fungicides and their role in effective disease management in agriculture.',
                'content_1' => 'Bio Fungicides Revolution',
                'highlighted_line1' => 'Defending crops against diseases',
                'content_2' => 'Explore the cutting-edge world of bio fungicides and how they offer an eco-friendly solution to disease management in agriculture.',
                'subtitle_1' => 'Eco-Friendly Disease Control',
                'para_1' => 'Chemical fungicides can leave residues and harm the environment. Discover how bio fungicides are changing the game by providing sustainable disease control.',
                'image_2' => 'https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg',
                'subtitle_2' => "Nature's Defense Mechanism",
                'para_2' => "Bio fungicides are inspired by nature's own defense mechanisms. Learn how these innovative products protect crops without harming the planet.",
                'para_3' => 'Join us on a journey to explore the future of disease management in agriculture through bio fungicides.',
            ],
            [
                'id' => '7',
                'title' => 'Maximizing Crop Yields with Advanced Pesticides',
                'image' => 'https://grist.org/wp-content/uploads/2023/01/India-agriculture-pesticides.jpg',
                'author' => 'Alice Johnson',
                'date' => 'Jul 20, 2022',
                'comments' => 8,
                'content' => 'Learn how the latest pesticide technologies are helping farmers protect their crops and increase productivity.',
                'content_1' => 'Advanced Pesticide Solutions',
                'highlighted_line1' => 'Protecting crops and boosting yields',
                'content_2' => 'Discover the science behind advanced pesticides and how they are becoming a crucial tool for modern agriculture.',
                'subtitle_1' => 'Precision Pest Control',
                'para_1' => 'Modern agriculture faces numerous challenges, including pest threats. Explore how advanced pesticides are helping farmers safeguard their crops with precision.',
                'image_2' => 'https://grist.org/wp-content/uploads/2023/01/India-agriculture-pesticides.jpg',
                'subtitle_2' => 'Balancing Act',
                'para_2' => 'Advanced pesticides aim to protect crops while minimizing environmental impact. Learn about the innovations that strike this delicate balance.',
                'para_3' => 'Join us on a journey to unlock the potential of advanced pesticides in modern agriculture.',
            ],
            [
                'id' => '8',
                'title' => 'The Role of Micronutrients in Crop Health',
                'image' => 'https://assets.img.blog/blog-4.jpg',
                'author' => 'David Smith',
                'date' => 'Jun 10, 2022',
                'comments' => 7,
                'content' => 'Explore how micronutrients play a crucial role in maintaining the health and growth of agricultural crops.',
                'content_1' => 'Micronutrients in Agriculture',
                'highlighted_line1' => 'Nurturing crops for optimal health',
                'content_2' => 'Delve into the world of micronutrients and how they contribute to the well-being of crops in sustainable agriculture.',
                'subtitle_1' => 'Tiny Nutrients, Big Impact',
                'para_1' => 'Micronutrients like iron, zinc, and manganese are essential for crop health. Learn about their functions and the consequences of deficiencies.',
                'image_2' => 'https://assets.img.blog/blog-4.jpg',
                'subtitle_2' => 'Crop Nutrition',
                'para_2' => 'Maintaining balanced micronutrient levels is critical for crop growth and yield. Explore how farmers are optimizing crop nutrition for sustainable farming.',
                'para_3' => 'Join us on a journey to uncover the hidden world of micronutrients and their impact on crop health.',
            ],
            [
                'id' => '9',
                'title' => 'Urban Farming: Growing Food in the City',
                'image' => 'https://assets.img.blog/blog-5.jpg',
                'author' => 'Emily Davis',
                'date' => 'May 5, 2022',
                'comments' => 6,
                'content' => 'Discover the fascinating world of urban farming and how it\'s changing the way we access fresh produce in cities.',
                'content_1' => 'Urban Agriculture Revolution',
                'highlighted_line1' => 'Bringing farms to the city',
                'content_2' => 'Explore the innovative concept of urban farming and its potential to address food security and sustainability in urban areas.',
                'subtitle_1' => 'City Food Production',
                'para_1' => 'Urban farming isn\'t just a trend; it\'s a solution to growing food demands in cities. Learn how urban agriculture is making fresh produce accessible to urbanites.',
                'image_2' => 'https://assets.img.blog/blog-5.jpg',
                'subtitle_2' => 'Sustainable City Living',
                'para_2' => 'Urban farming promotes sustainability by reducing food miles and food waste. Discover how it contributes to a greener, healthier urban environment.',
                'para_3' => 'Join us on a journey to explore the thriving gardens and rooftops of urban agriculture.',
            ],
            [
                'id' => '10',
                'title' => 'Hydroponics: Revolutionizing Crop Cultivation',
                'image' => 'https://assets.img.blog/blog-6.jpg',
                'author' => 'Michael Johnson',
                'date' => 'Apr 2, 2022',
                'comments' => 5,
                'content' => 'Learn how hydroponics is changing the way we grow crops and its potential to revolutionize agriculture.',
                'content_1' => 'Hydroponic Farming',
                'highlighted_line1' => 'Growing without soil',
                'content_2' => 'Dive into the world of hydroponics and discover how soilless farming is paving the way for efficient and sustainable agriculture.',
                'subtitle_1' => 'Soil-Free Agriculture',
                'para_1' => 'Hydroponics challenges traditional farming methods by providing a controlled environment for plant growth. Explore the benefits of this futuristic approach.',
                'image_2' => 'https://assets.img.blog/blog-6.jpg',
                'subtitle_2' => 'Resource-Efficient Farming',
                'para_2' => 'With water scarcity and land limitations, hydroponics offers a solution to maximize resource efficiency in agriculture. Learn how it conserves water and space.',
                'para_3' => 'Join us on a journey to discover the soilless world of hydroponics and its potential to transform agriculture.',
            ],
        ];

        return $articles;
    }
    public function showBlog($id) {
        $articles = $this->getArticles();

        // Find the article with the matching ID in the array
        $article = collect($articles)->firstWhere('id', $id);

        if (!$article) {
            // Handle the case where the article with the given ID is not found.
            abort(404);
        }

        return view('blog_details', compact('article'));
    }

}
