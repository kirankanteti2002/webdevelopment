import os
import labelImg

def annotate_video_frames(video_path, output_dir):
    # Create output directory if it doesn't exist
    os.makedirs(output_dir, exist_ok=True)

    # Run LabelImg for each frame in the video
    labelImg.main(['labelImg.py', video_path, 'person', os.path.join(output_dir, 'annotations.xml')])

if __name__ == "__main__":
    # Specify your video file path and output directory
    video_path = 'video.mp4'
    output_dir = '/home/lab8/Downloads'

    annotate_video_frames(video_path, output_dir)