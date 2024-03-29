<x-auth-layout>
    <div class="dashboard-homepage">

        <section class="admin-cards-sect analytics">

            <p class="sect-title">
                Orders
            </p>

            <div class="admin-cards">
                <div class="admin-card bg-gradient-to-br from-primary-1/20 to-pink-500/20">
                    <div class="admin-card-label">received</div>
                    <div class="admin-card-figure">286</div>
                </div>

                <div class="admin-card bg-gradient-to-br from-primary-3/20 to-green-700/20 ">
                    <div class="admin-card-label">completed</div>
                    <div class="admin-card-figure">218</div>
                </div>

                <div class="admin-card bg-gradient-to-br from-indigo-500/20 to-primary-1/20 ">
                    <div class="admin-card-label">pending</div>
                    <div class="admin-card-figure">64</div>
                </div>

                <div class="admin-card bg-gradient-to-br from-purple-700/20 to-primary-4/20 ">
                    <div class="admin-card-label">cancelled</div>
                    <div class="admin-card-figure">4</div>
                </div>
            </div>

        </section>


        <section class="charts">

            @foreach ([(object) ['id' => 'first', 'type' => 'line'], (object) ['id' => 'second', 'type' => 'polarArea']] as $chart)
                <x-dashboard.chart :id="$chart->id" :type="$chart->type" />
            @endforeach


        </section>



        <section class="admin-cards-sect control-items">
            <p class="sect-title">
                control items
            </p>
            <div class="admin-cards">
                @foreach ($appstats as $stat)
                    <div class="admin-card">
                        <div class="admin-card-label">{{ $stat->title }}</div>
                        <div class="admin-card-figure">{{ $stat->value }}</div>
                    </div>
                @endforeach
            </div>

        </section>


        <section class="admin-cards-sect misc">
            <p class="sect-title">
                stats
            </p>
            <div class="admin-cards">
                <div class="admin-card">
                    <div class="admin-card-label">admins</div>
                    <div class="admin-card-figure">20</div>

                </div>

                <div class="admin-card">
                    <div class="admin-card-label">clients</div>
                    <div class="admin-card-figure">85</div>
                </div>

                <div class="admin-card">
                    <div class="admin-card-label">messages</div>
                    <div class="admin-card-figure">2367</div>
                </div>

                <div class="admin-card">
                    <div class="admin-card-label">transactions</div>
                    <div class="admin-card-figure">421</div>
                </div>
            </div>

        </section>


    </div>
</x-auth-layout>
